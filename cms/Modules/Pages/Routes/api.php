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

Route::get('pages/contact-us', "ContactUsController@getContactUs");
Route::get('pages/about-us', "AboutUsController@getAboutUs");
Route::get('pages/who-we-are', "WhoWeAreController@getWhoWeAre");
Route::get('pages/our-goals', "OurGoalsController@getOurGoals");
