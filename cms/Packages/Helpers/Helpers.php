<?php

namespace Packages\Helpers;

class Helpers{
//----------------------------------------------------------------//
    public function __construct(){
        $this->lang = \LaravelLocalization::getCurrentLocale();
    }
//----------------------------------------------------------------//
    public function get_members_fields(){
        $memberFields = [
            [
                'field_code'        =>  'first_name',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'last_name',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'personal_email',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'society_email',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'personal_website',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'mobile_phone',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'social_links',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'location',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'research_interests',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'skills',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'degrees',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'associations',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'current_occupation',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'member_bio',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'publications',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],[
                'field_code'        =>  'resume',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
        ];

        return $memberFields;
    }
//----------------------------------------------------------------//
    public function get_members_field_name($field_code){
        $field_name = '';
        
        return $field_name;
    }
//----------------------------------------------------------------//
}
