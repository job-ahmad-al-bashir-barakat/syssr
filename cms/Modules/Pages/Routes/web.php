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
], function() {
   
    Route::prefix('pages')->group(function() {
        
        Route::resource('contact-us', 'ContactUsController');
        Route::get('/getDatatableContactUs', [
            'as' => 'getDatatableContactUs.data', 'uses' => 'ContactUsController@getDatatableContactUs',
        ]);

        Route::resource('about-us', 'AboutUsController');

        Route::resource('who-we-are', 'WhoWeAreController');

        Route::resource('our-goals', 'OurGoalsController');

    });

});