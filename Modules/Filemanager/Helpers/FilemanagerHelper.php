<?php
namespace Modules\Filemanager\Helpers;

class FilemanagerHelper
{
    public static function getThumbsImage()
    {
        if(!config('thumbs.thumbs')){
            throw new \DomainException("'thumbs' params is not founded");
        }
        return config('thumbs.thumbs');
    }

    public static function getImagesExt()
    {
        if(!config('thumbs.images_ext')){
            throw new \DomainException("'images_ext' params is not founded");
        }
        return config('thumbs.images_ext');
    }
}
