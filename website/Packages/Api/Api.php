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
    public function city($code){
        return $this->request->get("settings/get-location?type=city&code=$code");
    }
//--------------------------------------------------------------------------//
    public function getDefaultContactUs(){
        return $this->request->get("pages/contact-us?default=Y");
    }
//--------------------------------------------------------------------------//
    public function getContactUs(){
        $contacts = $this->request->get("pages/contact-us");
        return json_decode(json_encode($contacts), True);
    }
//--------------------------------------------------------------------------//
    public function occupation(){
        return $this->request->get("settings/get-data-settings?type=occupations");
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
    public function getMembersFieldsSettings(){
        $response = $this->request->get("members/get-fields-settings");
    }
//--------------------------------------------------------------------------//

}
