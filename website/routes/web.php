<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect']
], function()
{
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('about-society/about-us', 'HomeController@about_us')->name('about-us');
    Route::get('about-society/view-society', 'HomeController@view_society')->name('view-society');
    Route::get('about-society/members-society', 'HomeController@members_society')->name('members-society');
    Route::get('about-society/join-us', 'HomeController@join_us')->name('join-us');

    Route::get('news-society/ads', 'HomeController@ads')->name('ads');
    Route::get('news-society/opportunity-job', 'HomeController@opportunity_job')->name('opportunity-job');
    Route::get('news-society/news-members', 'HomeController@news_members')->name('news-members');

    Route::get('workshop', 'HomeController@workshop')->name('news-members');
    Route::get('contact', 'HomeController@contact')->name('news-members');

    Route::get('profile', 'ProfileController@index')->name('profile');

    Auth::routes();
});

