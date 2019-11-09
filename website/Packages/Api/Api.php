<?php

namespace Packages\Api;

class Api
{
//--------------------------------------------------------------------------//
    public function __construct(){
        $this->request = new Request();
        $this->lang = \LaravelLocalization::getCurrentLocale();
    }
//--------------------------------------------------------------------------//
    public function member(){
        $id = \Auth::id();
        return $this->request->get("member/{$id}");
    }
//--------------------------------------------------------------------------//
    public function country(){
        return $this->request->get("settings/get-location?type=country");
    }
//--------------------------------------------------------------------------//
    public function getAboutUs(){
        $response = $this->request->get("pages/about-us" ,['lang' => $this->lang]);
        return $response->description;
    }
//--------------------------------------------------------------------------//
    public function getWhoWeAre(){
        $response = $this->request->get("pages/who-we-are" ,['lang' => $this->lang]);
        return $response->description;
    }
//--------------------------------------------------------------------------//
    public function getOurGoals(){
        $response = $this->request->get("pages/our-goals" ,['lang' => $this->lang]);
        return $response->description;
    }
//--------------------------------------------------------------------------//

}
