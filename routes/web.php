<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "App\Http\Controllers\LoginController@index");

Route::get('/profile', "App\Http\Controllers\ProfileController@viewProfile");
Route::get('/profile/api', "App\Http\Controllers\ProfileController@api");




