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
    }
//----------------------------------------------------------------------//

//----------------------------------------------------------------------//
}