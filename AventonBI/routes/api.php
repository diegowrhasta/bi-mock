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

Route::get('users','UserController@index');
Route::get('users/{id_user}','UserController@show');
Route::post('users','UserController@store');
Route::put('users/{id_user}','UserController@update');
Route::delete('users/{id_user}','UserController@delete');

Route::get('attendants','AttendantController@index');
Route::get('attendants/{id_attendant}','AttendantController@show');
Route::post('attendants','AttendantController@store');
Route::put('attendants/{id_attendant}','AttendantController@update');
Route::delete('attendants/{id_attendant}','AttendantController@delete');


