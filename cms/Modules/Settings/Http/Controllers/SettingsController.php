<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller{
    public $notAllowedLang = [];
//----------------------------------------------------------------------//
    public function __construct(){
        $this->middleware(['auth','verified']);
        $this->notAllowedLang = ['auth','datatable','validation','pagination'];
    }
//----------------------------------------------------------------------//
    public function lang_vars(){

        array_push($this->notAllowedLang,'meta');

        $files = File::allFiles(resource_path("lang/ar"));
        $filesArr = [];
        foreach($files as $file){
            $filename = basename($file,'.php');
            if(!in_array($filename,$this->notAllowedLang)) {
                $tmpArr = [
                    'filename'  => $filename,
                    'ar'        => trans($filename, [], 'ar'),
                    'en'        => trans($filename, [], 'en')
                ];
                array_push($filesArr, $tmpArr);
            }
        }
        // dd($filesArr);
        return view('settings::lang_vars',compact('filesArr'));
    }
//----------------------------------------------------------------------//
}