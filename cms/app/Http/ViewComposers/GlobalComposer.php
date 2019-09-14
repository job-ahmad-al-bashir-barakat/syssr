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

      $view->with(compact('lang', 'dir', 'left','right'));
	}
}

?>