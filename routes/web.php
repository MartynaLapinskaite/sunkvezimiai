<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SunkvezimisController@index');
Route::get('/store', 'SunkvezimisController@create')->name('store');
Route::post('/create', 'SunkvezimisController@store')->name('create');
Route::post('/filtravimas', 'SunkvezimisController@filtravimas')->name('filtravimas');
