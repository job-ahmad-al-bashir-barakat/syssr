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
    public function members(){
        return $this->request->get("members");
    }
//--------------------------------------------------------------------------//
    public function member($slug = ''){
        $slug = empty($slug) ? \Auth::id() : $slug;
        return $this->request->get("member/{$slug}");
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
        $array = json_decode(json_encode($response), True);
        $return_arr = $array;
        $return_arr['tabs']['personal'] = $this->checkValueByIndex_2dArr($array, ['username', 'bio', 'avatar', 'first_name', 'last_name', 'email', 'birth_date', 'gender', 'mobile', 'personal_website'], 'required', 'T');
        $return_arr['tabs']['address'] = $this->checkValueByIndex_2dArr($array, ['country', 'city', 'street_location'], 'required', 'T');
        $return_arr['tabs']['resume'] = $this->checkValueByIndex_2dArr($array, ['research_interests', 'skills', 'degrees', 'associations', 'current_occupation', 'resume', 'publications'], 'required', 'T');

        return $return_arr;
    }
//--------------------------------------------------------------------------//
//-------------------------
// This function search for $value in 2D $arr 
// By $index_1 (Must be an array [1D] of indexs) & $index_2 (Must be one value)
//-------------------------
    public function checkValueByIndex_2dArr($arr, $index_1, $index_2, $value){
        foreach ($arr as $key => $val) {
            if(in_array($key, $index_1)){
                if($val[$index_2]==$value)
                    return true;
            }
        }
        return false;
    }
//--------------------------------------------------------------------------//
}
