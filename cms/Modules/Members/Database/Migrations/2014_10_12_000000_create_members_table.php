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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('api_token', 80)->unique()->nullable()->default(null);
            $table->date('birth_date')->nullable();
            $table->string('gender',1)->nullable();
            $table->string('avatar',255)->nullable();
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
