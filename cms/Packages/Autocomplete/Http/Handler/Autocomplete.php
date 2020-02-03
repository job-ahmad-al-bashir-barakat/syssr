<?php

namespace Packages\Autocomplete\Http\Handler;

use Illuminate\Http\Request;

class Autocomplete
{
    function autocomplete(Request $request ,$query)
    {
        // add extra filter here
        return $query;
    }
}
