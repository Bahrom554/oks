<?php
namespace Modules\Filemanager\Http\Repository\Interfaces;

use Modules\Filemanager\Dto\GeneratePathFileDTO;
use Modules\Filemanager\Entities\Files;

interface FileInterface
{
    /**
     * @param GeneratePathFileDTO $generatePathFileDTO
     * @return mixed
     */
    public function generatePath(GeneratePathFileDTO $generatePathFileDTO);

    /**
     * @param GeneratePathFileDTO $dto
     * @return mixed
     */
    public function uploadFile(GeneratePathFileDTO $dto);

    /**
     * @param Files $file
     * @param $type
     * @return mixed
     */
    public function downloadFile(Files $file, $type);
}
