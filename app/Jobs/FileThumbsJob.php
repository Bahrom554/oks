<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Modules\Filemanager\Entities\Files;
use Modules\Filemanager\Helpers\FilemanagerHelper;
use Throwable;
use const Grpc\STATUS_OUT_OF_RANGE;

class FileThumbsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $file;

    /**
     * FileThumbsJob constructor.
     * @param Files $file
     */
    public function __construct(Files $file)
    {
       $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file = $this->file;
        $thumbsImages = FileManagerHelper::getThumbsImage();
        $folder = Storage::disk('local')->path('origin');
        $origin = $folder.'/'.$file->folder.$file->file;
        try {
            foreach ($thumbsImages as $thumbsImage) {
                $width = $thumbsImage['w'];
                $qualty = $thumbsImage['q'];
                $slug = $thumbsImage['slug'];
                $newFileDist = $file->path .'/'. $file->slug . "_" . $slug . "." . $file->ext;
                if ($file->ext == 'svg') {
                    copy($origin, $newFileDist);
                } else {
                    if ($slug == 'normal' || $slug == 'low') {
                        $img = Image::make($origin);
                        $height = $width / ($img->getWidth() / $img->getHeight());
                        $img->resize($width,$height)->save($newFileDist, 100);
                        rename($newFileDist, $folder.'/'. $file->folder . $file->slug . "_" . $slug . "." . $file->ext);
                    }
                    $img = Image::make($origin);
                    if ($slug == 'normal' || $slug == 'low') {
                        $img->insert(base_path('static').'/header-logo_'.$slug.'.png', 'bottom-right', 10, 40);
                    }
                    $height = $width / ($img->getWidth() / $img->getHeight());
                    $img->resize($width,$height)->save($newFileDist, $qualty);
                }
            }
        } catch (Throwable $e) {
            report($e);
        }
    }
}
