<?php

namespace Modules\Members\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Settings\Entities\Association;
use Modules\Settings\Entities\Country;
use Modules\Settings\Entities\Degree;
use Modules\Settings\Entities\ResearchInterest;
use Modules\Settings\Entities\Skill;

class Member extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $with = ['country'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'bio',
        'email',
        'password',
        'birth_date',
        'gender',
        'mobile',
        'website',
        'street_address',
        'location',
        'avatar',
        'facebook',
        'linked_in',
        'github',
        'country_id',
        'city_id',
        'occupation_id',
        'publications',
        'resume_file',
        'type',
        'status',
        'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'birth_date'        => 'date_format:yyyy-MM-dd',
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'avatar_url', 'resume_file_url'
    ];

    function getAvatarUrlAttribute() {
        if($this->avatar)
            return url("storage/avatar/$this->id/$this->avatar");
    }

    function getResumeFileUrlAttribute() {
        if($this->resume_file)
            return url("storage/files/resume-$this->id/$this->resume_file");
    }

    function country() {
        return $this->belongsTo(Country::class);
    }

    function research_interests() {
        return $this->belongsToMany(ResearchInterest::class);
    }

    function skills() {
        return $this->belongsToMany(Skill::class);
    }

    function degrees() {
        return $this->belongsToMany(Degree::class);
    }

    function associations() {
        return $this->belongsToMany(Association::class);
    }
}
