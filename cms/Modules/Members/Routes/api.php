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
Route::middleware('auth:api')->get('/member/{id}', function (Request $request, $id) {
    return \Modules\Members\Entities\Member::findOrFail($id);
});

// middleware('auth:api')->
Route::post('/member', function (Request $request) {
    return  Response::json(['das' => 'dsa']);
});
