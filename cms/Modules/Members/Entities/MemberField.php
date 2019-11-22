<?php

namespace Modules\Members\Entities;

use Illuminate\Database\Eloquent\Model;

class MemberField extends Model
{
    protected $fillable = ['field_code', 'field_visibility', 'required', 'over_ride'];
}
