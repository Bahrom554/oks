<?php

namespace Modules\Filemanager\Http\Repository;

use App\Jobs\FileThumbsJob;
use DomainException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Modules\Filemanager\Dto\GeneratedPathFileDTO;
use Modules\Filemanager\Dto\GeneratePathFileDTO;
use Modules\Filemanager\Entities\Files;
use Modules\Filemanager\Helpers\FilemanagerHelper;
use Modules\Filemanager\Http\Repository\Interfaces\FileInterface;
use Throwable;

class FileRepository implements FileInterface
{
    /**
     * @inheritDoc
     */
    public function uploadFile(GeneratePathFileDTO $dto)
    {
        DB::beginTransaction();
        try {
            $generatedDTO = $this->generatePath($dto);

            $generatedDTO->origin_name = $dto->file->getClientOriginalName();
            $generatedDTO->file_size = $dto->file->getSize();
            $generatedDTO->folder_id = $dto->folder_id;
            $dto->file->move($generatedDTO->file_folder, $generatedDTO->file_name . '.' . $generatedDTO->file_ext);

            $file = $this->createFileModel($generatedDTO);

//            FileThumbsJob::dispatch($file);

            $this->createThumbnails($file);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new DomainException($e->getMessage(), $e->getCode());
        }
        return $file;
    }

    /**
     * @param GeneratePathFileDTO $generatePathFileDTO
     * @return GeneratedPathFileDTO
     */
    public function generatePath(GeneratePathFileDTO $generatePathFileDTO): GeneratedPathFileDTO
    {
        $generatedPathFileDTO = new GeneratedPathFileDTO();
        $created_at = time();

        $file = $generatePathFileDTO->file;
        $y = date("Y", $created_at);
        $m = date("m", $created_at);
        $d = date("d", $created_at);
        $h = date("H", $created_at);
        $i = date("i", $created_at);

        $folders = [
            $y,
            $m,
            $d,
            $h,
            $i
        ];

        $file_hash = Str::random(32);
        $file_name = Str::slug($file->getClientOriginalName()) . "_" . Str::random(10);
        $basePath = base_path('static');
        $folderPath = '';
        foreach ($folders as $folder) {
            $basePath .= '/' . $folder;
            $folderPath .= $folder . '/';
            if (!is_dir($basePath)) {
                mkdir($basePath, 0777);
                chmod($basePath, 0777);
                Storage::makeDirectory('origin/' . $folderPath);
            }
        }
        if (!is_writable($basePath)) {
            throw new DomainException("Path is not writeable");
        }
        $generatedPathFileDTO->file_folder = $basePath;

        $path = $basePath . '/' . $file_hash . "." . $file->getClientOriginalExtension();
        $generatedPathFileDTO->file_name = $file_hash;

        if ($generatePathFileDTO->useFileName) {
            $generatedPathFileDTO->file_name = $file_name;
            $path = $basePath . $file_name . "." . $file->getClientOriginalExtension();
        }

        $generatedPathFileDTO->file_ext = $file->getClientOriginalExtension();
        $generatedPathFileDTO->file_path = $path;
        $generatedPathFileDTO->created_at = $created_at;
        $generatedPathFileDTO->folder_path = $folderPath;

        return $generatedPathFileDTO;
    }

    private function createFileModel(GeneratedPathFileDTO $generatedDTO)
    {
        $data = [
            'title' => $generatedDTO->origin_name,
            'description' => $generatedDTO->origin_name,
            'slug' => $generatedDTO->file_name,
            'ext' => $generatedDTO->file_ext,
            'file' => $generatedDTO->file_name . '.' . $generatedDTO->file_ext,
            'folder' => $generatedDTO->folder_path,
            'folder_id' => $generatedDTO->folder_id,
            'domain' => config('system.STATIC_URL'),
            'user_id' => Auth::id(),
            'path' => $generatedDTO->file_folder,
            'size' => $generatedDTO->file_size
        ];
        try {
            $file = Files::create($data);
        } catch (\Exception $exception) {
            print_r($exception->getMessage());
            exit();
        }
        return $file;
    }

    private function createThumbnails(Files $file)
    {
        if (!$file->getIsImage()) {
            return null;
        }

        $thumbsImages = FileManagerHelper::getThumbsImage();
        $origin = $file->getDist();
        try {
            foreach ($thumbsImages as $thumbsImage) {
                $width = $thumbsImage['w'];
                $qualty = $thumbsImage['q'];
                $slug = $thumbsImage['slug'];
                $newFileDist = $file->path . '/' . $file->slug . "_" . $slug . "." . $file->ext;
                if ($file->ext == 'svg') {
                    copy($origin, $newFileDist);
                } else {
                    $img = Image::make($origin);
                    $height = $width / ($img->getWidth() / $img->getHeight());
                    $img->resize($width, $height)->save($newFileDist, $qualty);
                }
            }
        } catch (Throwable $e) {
            report($e);
            return false;
        }
//        $folder = Storage::disk('local')->path('origin');
//        rename($origin, $folder . '/' . $file->folder . $file->file);
        return true;
    }

    /**
     * @param Files $file
     * @param $type
     * @return mixed|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadFile(Files $file, $type)
    {
        $folder = Storage::disk('local')->path('origin');
        $link = $folder . '/' . $file->folder . $file->slug . '_' . $type .'.'. $file->ext;
        $headers = ['Content-Type' => 'application/' . $file->ext,];
        return response()->download($link, $file->title . '.' . $file->ext, $headers);
    }
}
