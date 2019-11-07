<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Members\Entities\MemberField;

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
            $table->string('over_ride',1)->default('T')->comment = 'values: T, F';
            $table->timestamps();
        });

        $memberFields = [
            [
                'field_code'        =>  'first_name',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'last_name',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'personal_email',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'society_email',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'personal_website',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'mobile_phone',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'social_links',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'location',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'research_interests',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'skills',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'degrees',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'associations',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'current_occupation',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'member_bio',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'publications',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
            ],
            [
                'field_code'        =>  'resume',
                'field_visibility'  =>  'PUBLIC',
                'over_ride'         =>  'T',
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
