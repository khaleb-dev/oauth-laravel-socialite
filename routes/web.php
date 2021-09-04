<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function(){
    Return view('googleAuth');
});

Route::get('auth/google', 'App\Http\Controllers\Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\LoginController@handleGoogleCallback');
