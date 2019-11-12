<?php

namespace Modules\Pages\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ContactUs extends Model
{
    use HasTranslations;
    
    public $translatable = ['name', 'address'];

    protected $fillable = ['name', 'default', 'contact_email', 'info_email', 'phone', 'mobile_1', 'mobile_2', 'address', 'lat', 'lng',
                            'facebook', 'linkedin', 'twitter', 'google_plus', 'youtube', 'whatsapp', 'skype', 'medium'];
}
