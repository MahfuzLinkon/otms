<?php

namespace App\helper;

class Helper
{
    public static function uploadFile($fileObject, $directory, $existingFileUrl = null){
        if ($fileObject){
            if ($existingFileUrl){
                if (file_exists($existingFileUrl)){
                    unlink($existingFileUrl);
                }
            }
            $fileName = time().rand(18, 1000).$fileObject->getClientOriginalName();
            $fileDirectory = 'admin/assets/images/uploaded-image/'.$directory.'/';
            $fileObject->move($fileDirectory, $fileName);
            $fileUrl = $fileDirectory.$fileName;
        }else{
            if ($existingFileUrl){
                $fileUrl = $existingFileUrl;
            }else{
                $fileUrl = null;
            }
        }

        return $fileUrl;
    }
}
