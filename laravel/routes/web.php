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

Route::resource('admin/regions', 'AdminRegionsController', [ 'as' => 'Admin - Regions' ]);

/*
|--------------------------------------------------------------------------
| Fields
|--------------------------------------------------------------------------
*/

Route::resource('admin/fields', 'AdminFieldsController', [ 'as' => 'Admin - Fields Management' ]);
Route::resource('admin/fieldsValue', 'AdminFieldsValueController', [ 'as' => 'Admin - Fields Management Value' ]);

/*
|--------------------------------------------------------------------------
| Admin users
|--------------------------------------------------------------------------
*/

Route::resource('admin/users', 'AdminUsersController', [ 'as' => 'Admin - Users' ]);

/*
|--------------------------------------------------------------------------
| Admin user groups
|--------------------------------------------------------------------------
*/

Route::resource('admin/user_groups', 'AdminUserGroupsController', [ 'as' => 'Admin - User Groups' ]);



/*
|--------------------------------------------------------------------------
| Drawings
|--------------------------------------------------------------------------
*/

Route::resource('drawings', 'DrawingsController', [ 'as' => 'Drawings' ]);

//Route::get('drawings/layout', 'DrawingsController@layout')->name('Drawings - Layout');
//Route::get('drawings/list', 'DrawingsController@List')->name('Drawings - List');


Route::resource('project/{id}/drawings', 'DrawingsController', [ 'as' => 'Drawings - Main' ]);
Route::get('project/overview', 'ProjectController@projectOverview');
/*
|--------------------------------------------------------------------------
| Main Equipment
|--------------------------------------------------------------------------
*/

Route::get('equipment/forecasting', 'EquipmentController@forecasting')->name('Equpment - Forecasting');
Route::get('equipment/rental', 'EquipmentController@rental')->name('Equpment - Rental');
Route::get('equipment/allocation', 'EquipmentController@allocation')->name('Equpment - Allocation');
Route::get('equipment/inventory', 'EquipmentController@inventory')->name('Equpment - Inventory');

// project equipment routes
Route::get('project/approvetruck', 'EquipmentController@approvetruck')->name('Equpment - Approvetruck');


Route::get('equipment/overview', 'EquipmentController@index')->name('Equpment - Overview');

Route::resource('/equipment/eqmanagement', 'CategoryController', [ 'as' => 'Equpment - Management' ]);

Route::resource('/equipment/subcategories', 'SubCategoryController', [ 'as' => 'Equpment - Subcategories' ]);

Route::resource('/equipment/regionequipment', 'RegionEquipmentcontroller', [ 'as' => 'Equpment - Regions' ]);
