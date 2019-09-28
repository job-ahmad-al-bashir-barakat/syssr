<?php

namespace Packages\Api;

class Api
{
    public function __construct()
    {
        $this->request = new Request();
    }

    function members()
    {
        return $this->request->get('members');
    }
}
