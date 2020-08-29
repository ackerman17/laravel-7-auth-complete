<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::view('/nonton', 'nonton')->middleware('verified');
