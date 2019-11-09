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

Route::post('pages/contact-us', "ContactUsController@getContactUs");
Route::post('pages/about-us', "AboutUsController@getAboutUs");
Route::post('pages/who-we-are', "AboutUsController@getWhoWeAre");
Route::post('pages/our-goals', "OurGoalsController@getOurGoals");