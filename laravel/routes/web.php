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

//Route::resource('drawings', 'DrawingsController', [ 'as' => 'Drawings' ]);

//Route::get('drawings/layout', 'DrawingsController@layout')->name('Drawings - Layout');
//Route::get('drawings/list', 'DrawingsController@List')->name('Drawings - List');

Route::resource('project/{id}/folders/{folder_id}/drawings', 'DrawingsController', [ 'as' => 'Drawings - Drawings' ]);

Route::resource('project/{id}/folders', 'FolderController', [ 'as' => 'Drawings - Folder' ]);






Route::get('project/overview', 'ProjectController@projectOverview');



/*
|--------------------------------------------------------------------------
| Photos
|--------------------------------------------------------------------------
*/

Route::resource('project/photos', 'PhotosFolderController');




/*
|--------------------------------------------------------------------------
| Main Equipment
|--------------------------------------------------------------------------
*/

Route::get('equipment/overview', 'EquipmentController@index')->name('Equpment - Overview');
Route::get('equipment/forecasting', 'EquipmentController@forecasting')->name('Equpment - Forecasting');
Route::get('equipment/rental', 'EquipmentController@rental')->name('Equpment - Rental');
Route::get('equipment/allocation', 'EquipmentController@allocation')->name('Equpment - Allocation');
Route::get('equipment/inventory', 'EquipmentController@inventory')->name('Equpment - Inventory');
Route::get('project/approvetruck', 'EquipmentController@approvetruck')->name('Equpment - Approvetruck');
Route::resource('/equipment/eqmanagement', 'CategoryController', [ 'as' => 'Equpment - Management' ]);
Route::resource('/equipment/subcategories', 'SubCategoryController', [ 'as' => 'Equpment - Subcategories' ]);
Route::resource('/equipment/regionequipment', 'RegionEquipmentcontroller', [ 'as' => 'Equpment - Regions' ]);

/*
|--------------------------------------------------------------------------
| Project Equipment
|--------------------------------------------------------------------------
*/

Route::get('project/equipment/overview', 'ProjectEquipmentController@overview')->name('Equipment - Overview');
Route::get('project/equipment/forecasting', 'ProjectEquipmentController@forecasting')->name('Equipment - Forecasting');
Route::get('project/equipment/truckinglog', 'ProjectEquipmentController@truckinglog')->name('Equipment - Trucking Log');
Route::get('project/equipment/rental', 'ProjectEquipmentController@rental')->name('Equipment - Rental');

Route::get('project/equipment/newtransfer', 'TransferController@create')->name('Equipment - New Transfer');
Route::get('project/equipment/newtrucking', 'TruckingController@create')->name('Equipment - New Trucking');
Route::get('project/equipment/newrequirement', 'RequirementController@create')->name('Equipment - New Requirement');
