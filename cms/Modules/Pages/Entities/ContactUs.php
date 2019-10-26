<?php

namespace Modules\Pages\Entities;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = ['contact_email','phone','mobile_1','mobile_2','facebook','linkedin','twitter','google_plus',
                            'youtube','whatsapp','skype','medium'];
}
