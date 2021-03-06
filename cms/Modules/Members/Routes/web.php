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
    'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect', 'auth']
], function() {

    Route::prefix('members')->group(function() {

        Route::get('/getDatatableMembers', [
            'as' => 'getDatatableMembers.data', 'uses' => 'MembersController@getDatatableMembers',
        ]);
        Route::put('/activate/{id}', [
            'as' => 'members.activate', 'uses' => 'MembersController@activate',
        ]);
        Route::put('/deactivate/{id}', [
            'as' => 'members.deactivate', 'uses' => 'MembersController@deactivate',
        ]);


        Route::get('/settings', 'MembersController@settings');
        Route::post('/save-member-settings', 'MembersController@saveMemberSettings');
    });

    Route::resource('members', 'MembersController');
});
