<?php

namespace Packages\Upload;

class Upload
{
    function avatar()
    {
        $file   = \request()->file('avatar');
        return response()->json(['ss' => $_FILES]);
//        $targetDirectory = "public\\avatar\\$route";
//        $uploadDirectory = "app\\public\\avatar\\$route";
//
//        $path       = storage_path($uploadDirectory);
//        $fileName   = request('filename');
//        $hashName   = strtolower(str_random(12))."_croppie_". $fileName;
//
//        // make directory if not exists
//        \Storage::makeDirectory($targetDirectory);
//
//        // move with intervention
//        $imgRezise = \Image::make($file->getRealPath());
//        $imgRezise->resize($width, $height)->save("$path/$hashName");
//
//        $model = $model::findOrFail($id);
//
//        if($model->$db_col)
//            \Storage::delete("$targetDirectory/{$model->$db_col}");
//
//        return $hashName
    }
}
