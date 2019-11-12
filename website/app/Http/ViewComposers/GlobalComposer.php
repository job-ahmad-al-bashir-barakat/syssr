<?php

namespace App\Http\ViewComposers;

use LaravelLocalization;
use Illuminate\View\View;

class GlobalComposer{
//------------------------------------------------------------------------------//
    public function getClientInfoByIp() {
        // https://usercountry.com/ (third)
        // https://restcountries.eu (second)
        $ip = file_get_contents('https://api.ipify.org');
        return json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    }
//------------------------------------------------------------------------------//
    public function compose(View $view){
        $dir = LaravelLocalization::getCurrentLocaleDirection();
        $lang = LaravelLocalization::getCurrentLocale();
        $left = ($dir=='ltr')? 'left':'right';
        $right = ($dir=='ltr')? 'right':'left';
        $name_route = \Route::currentRouteName();
        $cms_api_url = config('api.cms_api_url');

        $default_contact = \Api::getDefaultContactUs();

        $view->with(compact('lang', 'dir', 'left', 'right', 'name_route', 'cms_api_url', 'default_contact'));
    }
//------------------------------------------------------------------------------//
}

?>
