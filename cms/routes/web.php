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
    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // Route::get('/dashboard', 'IndexController@index')->name('dashboard');

    Route::get('/', 'IndexController@index')->middleware(['auth'])->name('dashboard');
    Auth::routes(['verify' => true, 'register' => false]);
});

