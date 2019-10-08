<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/member/{id}', "MembersController@show");
Route::middleware('auth:api')->put('/member/{id}' ,"MembersController@update");

// for test
// https://jamesmills.co.uk/2019/06/05/how-to-return-json-from-laravel-form-request-validation-errors/
//Route::post('hi' ,function () {
//    $validator = validator(['username' => ''], [
//        'username'   => "required",
//    ]);
//
//    if ($validator->fails()) {
//        return $validator->errors()->toJson();
//    }
//
//});
