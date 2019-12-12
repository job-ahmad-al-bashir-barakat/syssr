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
Route::get('/members', "Api\MembersController@index");
Route::get('/member/{id}', "MembersController@show");
Route::post('/member', "MembersController@store");
Route::middleware('auth:api')->put('/member/{id}' ,"MembersController@update");

Route::get('members/get-fields-settings' ,"MembersController@getMemberFields");
