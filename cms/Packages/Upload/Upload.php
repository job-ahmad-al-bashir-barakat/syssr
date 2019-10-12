<?php

namespace Packages\Upload;

use Intervention\Image\Image;
use Packages\Upload\Slim\Slim;
use Storage;

class Upload
{
    function avatar()
    {
        $image = Slim::getImages('avatar');
        $id = \Route::getCurrentRoute()->parameter('id');
        $uploadDirectory = "app\\public\\avatar\\$id";
        $targetDirectory = "public\\avatar\\$id";

        $path = storage_path($uploadDirectory);

        if($image) {

            $image = $image[0];

            // save output data if set
            if (isset($image['output']['data'])) {

                 // Remove avatar from storage
                 Storage::deleteDirectory($targetDirectory);

                // Save the file
                $name = $image['output']['name'];
                $data = $image['output']['data'];

                // $img = Image::make('public/foo.jpg');
                // $img->resize(60, 60);

                $output = Slim::saveFile($data,$name,$path);

                 // move with intervention
                 // $imgRezise = \Image::make($file->getRealPath());
                 // $imgRezise->resize($width, $height)->save("$path/$hashName");

                return $output['name'];
            }
        }
    }
}
