<?php

namespace Modules\Settings\Entities;

use Illuminate\Database\Eloquent\Model;

class City extends \Eloquent
{
    protected $fillable = ['id','name','country_code'];
}
