<?php

namespace Modules\Members\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Settings\Entities\Association;
use Modules\Settings\Entities\City;
use Modules\Settings\Entities\Country;
use Modules\Settings\Entities\Degree;
use Modules\Settings\Entities\Occupation;
use Modules\Settings\Entities\ResearchInterest;
use Modules\Settings\Entities\Skill;
use Spatie\Translatable\HasTranslations;

class Member extends Authenticatable
{
    use Notifiable, SoftDeletes, HasTranslations;
    
    public $translatable = ['first_name', 'last_name'];

    protected $with = ['country' ,'city'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'slug',
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
            return url("storage/avatar/$this->avatar");
        else
            return 'custom/img/user-image.png';
    }

    function getResumeFileUrlAttribute() {
        if($this->resume_file)
            return url("storage/files/resume/$this->resume_file");
    }

    function first_name(){
        return $this->getTranslation('first_name', 'en');
    }

    function last_name(){
        return $this->getTranslation('last_name', 'en');
    }

    function country() {
        return $this->belongsTo(Country::class);
    }

    function city() {
        return $this->belongsTo(City::class);
    }

    function research_interests() {
        return $this->belongsToMany(ResearchInterest::class)->withTimestamps();
    }

    function skills() {
        return $this->belongsToMany(Skill::class)->withTimestamps();
    }

    function degrees() {
        return $this->belongsToMany(Degree::class)->withTimestamps();
    }

    function associations() {
        return $this->belongsToMany(Association::class)->withTimestamps();
    }

    function occupation() {
        return $this->belongsTo(Occupation::class);
    }
}
