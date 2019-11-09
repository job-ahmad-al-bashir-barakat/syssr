<?php

namespace Modules\Pages\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WhoWeAre extends Model
{
    use HasTranslations;
    
    public $translatable = ['description'];

    protected $fillable = ['description'];

    protected $table = 'who_we_are';
}
