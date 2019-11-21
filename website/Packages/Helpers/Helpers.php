<?php

namespace Packages\Helpers;

class Helpers
{
    function __construct()
    {
        $this->lang = \LaravelLocalization::getCurrentLocale();
    }

    function objectTags($obj) {
        return collect($obj)->map(function($item) {
            return collect(['value' => $item->id, 'text' => $item->name->{$this->lang}]);
        })->toJson();
    }
}
