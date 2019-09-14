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
        });

        $users = [
            [
                'first_name'        =>  'Admin',
                'last_name'         =>  null,
                'username'          =>  'admin',
                'email'             =>  'admin@syssr.org',
                'password'          =>  Hash::make('admin'),
                'profile_photo'     =>  null,
            ]
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
