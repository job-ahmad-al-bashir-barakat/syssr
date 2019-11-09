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


Route::post('settings/get-data-settings', 'ApiController@get_data_settings');
Route::post('settings/set-data-settings', 'ApiController@set_data_settings');

Route::get('settings/get-location','ApiController@get_location');
