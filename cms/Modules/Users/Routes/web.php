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

    Route::prefix('users')->group(function() {

        Route::get('/getDatatableUsers', [
            'as' => 'getDatatableUsers.data', 'uses' => 'UsersController@getDatatableUsers',
        ]);

        Route::get('/{id}/change-password','UsersController@changePassword');
        Route::post('change-password','UsersController@changePasswordUpdate')->name('users.change_password');
        // Route::post('change-password',[
            // 'as' => 'users.change_password', 'uses' => 'UsersController@changePasswordUpdate',
        // ]);

    });

    Route::resource('users', 'UsersController');

});
