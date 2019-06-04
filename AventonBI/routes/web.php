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

Route::get('/perfil', function () {
    return view('index');
});
Route::get('/userprofile', function () {
    return view('userprofile');
});
Route::get('/attendantprofile', function () {
    return view('attendantprofile');
});
