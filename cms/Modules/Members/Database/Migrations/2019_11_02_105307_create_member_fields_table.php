<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Members\Entities\MemberField;
use Packages\Helpers;

class CreateMemberFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('field_code');
            $table->string('field_visibility',10)->default('PUBLIC')->comment = 'values: PUBLIC, INTERNAL, PRIVATE';
            $table->string('required',2)->default('F')->comment = 'values: T, F';
            $table->string('over_ride',2)->default('F')->comment = 'values: T, F';
            $table->timestamps();
        });

        // $memberFields = get_members_fields(); 
        $memberFields = [
            [
                'field_code'        =>  'username',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'bio',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'avatar',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'first_name',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'last_name',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'email',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'society_email',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'NA',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'date_of_join',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'NA',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'birth_date',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'gender',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'mobile',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'personal_website',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'country',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'city',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'street_location',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'research_interests',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'skills',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'degrees',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'associations',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'current_occupation',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'resume',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'publications',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],[
                'field_code'        =>  'social_links',
                'field_visibility'  =>  'PUBLIC',
                'required'          =>  'F',
                'over_ride'         =>  'F',
            ],
        ];
        foreach ($memberFields as $memberField) {
            MemberField::create($memberField);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_fields');
    }
}
