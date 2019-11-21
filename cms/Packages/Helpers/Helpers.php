<?php

namespace Packages\Helpers;

class Helpers
{
    function __construct()
    {
        $this->lang = \LaravelLocalization::getCurrentLocale();
    }
}
