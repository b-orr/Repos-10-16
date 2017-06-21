<?php

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/ 
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', 'GuestController@index');

/*
|--------------------------------------------------------------------------
| Super admin 
|--------------------------------------------------------------------------
*/ 

Route::resource('super', 'SuperController');