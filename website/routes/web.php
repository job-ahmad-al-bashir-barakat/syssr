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

    Route::get('about-society','HomeController@about_society')->name('about-society');
    Route::get('about-society/who-we-are', 'HomeController@who_we_are')->name('who-we-are');
    Route::get('about-society/society-goals', 'HomeController@society_goals')->name('society-goals');
    Route::get('about-society/members-society', 'HomeController@members_society')->name('members-society');
    Route::get('about-society/join-us', 'HomeController@join_us')->name('join-us')->middleware(['guest']);

    Route::get('news-society', 'HomeController@news_society')->name('news-society');
    Route::get('news-society/ads', 'HomeController@ads')->name('ads');
    Route::get('news-society/opportunity-job', 'HomeController@opportunity_job')->name('opportunity-job');
    Route::get('news-society/news-members', 'HomeController@news_members')->name('news-members');

    Route::get('projects','HomeController@projects')->name('projects');

    Route::get('workshop', 'HomeController@workshop')->name('news-members');
    Route::get('contact', 'ContactController@index')->name('contact');

    Route::get('profile', 'ProfileController@index')->name('profile');

    Auth::routes(['verify' => false, 'register' => false]);
});

