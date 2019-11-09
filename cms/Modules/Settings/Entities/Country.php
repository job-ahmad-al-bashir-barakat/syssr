<?php

namespace Modules\Settings\Entities;

use Illuminate\Database\Eloquent\Model;

class Country extends \Eloquent
{
    protected $fillable = ['id','name','code'];
}
