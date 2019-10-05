<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Modules\Users\Entities\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_photo')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        $users = [
            [
                'first_name'        =>  'Admin',
                'last_name'         =>  null,
                'username'          =>  'admin',
                'email'             =>  'admin@syssr.org',
                'password'          =>  Hash::make('admin'),
                'profile_photo'     =>  null,
            ],
            [
                'first_name'        =>  'User_1',
                'last_name'         =>  'User_1',
                'username'          =>  'user_1',
                'email'             =>  'user_1@syssr.org',
                'password'          =>  Hash::make('user_1'),
                'profile_photo'     =>  null,
            ],
            [
                'first_name'        =>  'User_2',
                'last_name'         =>  'User_2',
                'username'          =>  'user_2',
                'email'             =>  'user_2@syssr.org',
                'password'          =>  Hash::make('user_2'),
                'profile_photo'     =>  null,
            ],
            [
                'first_name'        =>  'User_3',
                'last_name'         =>  'User_3',
                'username'          =>  'user_3',
                'email'             =>  'user_3@syssr.org',
                'password'          =>  Hash::make('user_3'),
                'profile_photo'     =>  null,
            ],
            [
                'first_name'        =>  'User_4',
                'last_name'         =>  'User_4',
                'username'          =>  'user_4',
                'email'             =>  'user_4@syssr.org',
                'password'          =>  Hash::make('user_4'),
                'profile_photo'     =>  null,
            ],
            [
                'first_name'        =>  'User_5',
                'last_name'         =>  'User_5',
                'username'          =>  'user_5',
                'email'             =>  'user_5@syssr.org',
                'password'          =>  Hash::make('user_5'),
                'profile_photo'     =>  null,
            ],
        ];
        foreach ($users as $user) {
            $createdUser = User::create($user);
            $createdUser->email_verified_at = Carbon::now()->toDateTimeString();
            $createdUser->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
