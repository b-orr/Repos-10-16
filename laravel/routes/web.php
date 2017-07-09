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

/*
|--------------------------------------------------------------------------
|
|
| TENANT
|
|
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Project
|--------------------------------------------------------------------------
*/
Route::get('home', 'ProjectController@index');

/*
|--------------------------------------------------------------------------
| Administration region
|--------------------------------------------------------------------------
*/

Route::resource('admin/regions', 'AdminRegionsController');

/*
|--------------------------------------------------------------------------
| Drawings
|--------------------------------------------------------------------------
*/

Route::resource('project/{id}/drawings', 'DrawingsController');


/*
|--------------------------------------------------------------------------
| Main Equipment
|--------------------------------------------------------------------------
*/
Route::get('equipment/forecasting', 'EquipmentController@forecasting');
Route::get('equipment/rental', 'EquipmentController@rental');
Route::get('equipment/allocation', 'EquipmentController@allocation');
Route::get('equipment/inventory', 'EquipmentController@inventory');

// project equipment routes
Route::get('project/approvetruck', 'EquipmentController@approvetruck');


Route::get('equipment/overview', 'EquipmentController@index');

Route::resource('/equipment/eqmanagement', 'CategoryController');

Route::resource('/equipment/subcategories', 'SubCategoryController');

Route::resource('/equipment/regionequipment', 'RegionEquipmentcontroller');
