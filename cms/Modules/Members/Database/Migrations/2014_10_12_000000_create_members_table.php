<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Modules\Members\Entities\Member;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name'); // r
            $table->string('last_name'); // r
            $table->text('bio')->nullable();
            $table->string('username')->unique(); // r
            $table->string('society_email')->nullable()->unique();
            $table->string('email')->unique(); // r
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); // r
            $table->string('api_token', 80)->unique()->nullable()->default(null);
            $table->date('birth_date')->nullable();
            $table->string('gender',1)->nullable();
            $table->string('mobile')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('github')->nullable();
            $table->string('avatar')->nullable();

            $table->integer('country_id'); // r
            $table->integer('city_id'); // r
            $table->integer('occupation_id')->nullable();
            $table->string('street_address'); // o
            $table->string('location'); // r
            $table->text('publications')->nullable();
            $table->string('resume_file')->nullable();

//            research_interests // o
//            skills // o
//            degrees // o
//            associations // o

            // U: user,M: member
            $table->char('type',1)->default('U'); // r
            // A: Active, I: inactive, C: closed
            $table->char('status', 1)->default('A'); // r
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        $members = [
            [
                'first_name'        =>  'Admin',
                'last_name'         =>  null,
                'username'          =>  'admin',
                'email'             =>  'admin@syssr.org',
                'password'          =>  Hash::make('admin'),
                'api_token'         =>  \Str::random(60),
            ]
        ];
        foreach ($members as $member) {
            $createdMember = Member::create($member);
            $createdMember->email_verified_at = Carbon::now()->toDateTimeString();
            $createdMember->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
