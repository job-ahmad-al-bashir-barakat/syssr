<?php

namespace Modules\Settings\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Association extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['name','code'];
}
