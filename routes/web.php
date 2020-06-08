<?php

use Illuminate\Support\Facades\Route;

Route::any('/', 'SunkvezimisController@index');
Route::get('/store', 'SunkvezimisController@create')->name('store');
Route::post('/create', 'SunkvezimisController@store')->name('create');
Route::any('/filtravimas', 'SunkvezimisController@filtravimas')->name('filtravimas');
