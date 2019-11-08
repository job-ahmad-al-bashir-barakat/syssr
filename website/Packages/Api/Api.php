<?php

namespace Packages\Api;

use LaravelLocalization;

class Api{
    public $lang;
//--------------------------------------------------------------------------//
    public function __construct(){
        $this->request = new Request();
        $this->lang = LaravelLocalization::getCurrentLocale();
    }
//--------------------------------------------------------------------------//
    function member(){
        $id = \Auth::id();

        return $this->request->get("member/{$id}");
    }
//--------------------------------------------------------------------------//
    public function getOurGoals(){
        $response = $this->request->post("pages/our-goals",['lang' => $this->lang]);
        return $response['description'];
    }
//--------------------------------------------------------------------------//
}
