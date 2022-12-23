<?php

namespace App\helper;

class Helper
{
    public static function uploadFile($fileObject, $directory){
        $fileName = time().rand(18, 1000).$fileObject->getClientOriginalName();
        $fileDirectory = 'admin/assets/images/uploaded-image/'.$directory.'/';
        $fileObject->move($fileDirectory, $fileName);
        $fileUrl = $fileDirectory.$fileName;
        return $fileUrl;
    }
}
