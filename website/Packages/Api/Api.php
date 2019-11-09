<?php

namespace Packages\Api;

class Api
{
//--------------------------------------------------------------------------//
    public function __construct()
    {
        $this->request = new Request();
        $this->lang = \LaravelLocalization::getCurrentLocale();
    }
//--------------------------------------------------------------------------//
    public function member()
    {
        $id = \Auth::id();

        return $this->request->get("member/{$id}");
    }
//--------------------------------------------------------------------------//
    public function country()
    {
        return $this->request->get("settings/get-location?type=country");
    }
//--------------------------------------------------------------------------//
    public function getOurGoals(){
        $response = $this->request->post("pages/our-goals",['lang' => $this->lang]);
        return $response['description'];
    }
//--------------------------------------------------------------------------//

}
