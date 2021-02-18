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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/login','AuthController@login')->name('login');


Route::resource('/users','UserController')->middleware('auth:api');
Route::get('/roles','RolController@index')->middleware('auth:api');
Route::get('/status','StatuController@index')->middleware('auth:api');
Route::post('/filter','UserController@filterUser')->middleware('auth:api');