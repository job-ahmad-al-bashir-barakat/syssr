<?php

namespace Modules\Pages\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OurGoals extends Model
{
    use HasTranslations;
    
    public $translatable = ['description'];

    protected $fillable = ['description'];
}
