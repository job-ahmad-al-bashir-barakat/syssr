<?php

namespace App\Http\ViewComposers;

use LaravelLocalization;
use Illuminate\View\View;

class GlobalComposer{

    public function compose(View $view){
      $dir = LaravelLocalization::getCurrentLocaleDirection();
      $lang = LaravelLocalization::getCurrentLocale();
      $left = ($dir=='ltr')? 'left':'right';
      $right = ($dir=='ltr')? 'right':'left';
      $name_route = \Route::currentRouteName();
      $api_url = config('api.base_url');

      $view->with(compact('lang', 'dir', 'left','right', 'name_route','api_url'));
	}
}

?>
