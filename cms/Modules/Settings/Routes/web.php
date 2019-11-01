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

    Route::prefix('settings')->group(function() {

        Route::get('/lang-vars', 'SettingsController@lang_vars');

        Route::resource('skills', 'SkillsController');
        Route::get('/getDatatableSkills', [
            'as' => 'getDatatableSkills.data', 'uses' => 'SkillsController@getDatatableSkills',
        ]);

        Route::resource('research-interests', 'ResearchInterestsController');
        Route::get('/getDatatableResearchInterests', [
            'as' => 'getDatatableResearchInterests.data', 'uses' => 'ResearchInterestsController@getDatatableResearchInterests',
        ]);

    });

});
