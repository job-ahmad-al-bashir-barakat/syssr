<?php

namespace Packages\Api;

class Api
{
    public function __construct()
    {
        $this->request = new Request();
    }

    function member()
    {
        $id = \Auth::id();

        return $this->request->get("member/{$id}");
    }
}
