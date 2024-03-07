<?php

namespace App\Http\Service;

use Illuminate\Support\Facades\File;

class UploadFile
{
    public function uploadFile($file, $path)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($path, $fileName);
        return $fileName;
    }

    public function deleteFile($path)
    {
        if (File::exists($path))
            File::delete($path);
        else
            return false;
        return true;
    }
}
