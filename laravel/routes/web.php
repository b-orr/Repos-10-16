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
Route::resource('admin/fieldsRecords', 'AdminFieldsRecordsController', [ 'as' => 'Admin - Fields Management Records' ]);
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
| Projects
|--------------------------------------------------------------------------
*/


Route::resource('project', 'ProjectController', [ 'as' => 'Projects' ]);


/*
|--------------------------------------------------------------------------
| Estimating
|--------------------------------------------------------------------------
*/


Route::resource('estimate', 'EstimateController', [ 'as' => 'Estimating' ]);


/*
|--------------------------------------------------------------------------
| Drawings
|--------------------------------------------------------------------------
*/

//Route::resource('drawings', 'DrawingsController', [ 'as' => 'Drawings' ]);

//Route::get('drawings/layout', 'DrawingsController@layout')->name('Drawings - Layout');
//Route::get('drawings/list', 'DrawingsController@List')->name('Drawings - List');
 
Route::post('project/{project_id}/folders/{folder_id}/saveFile', 'UploadsController@saveToDB');
 
Route::get('project/{id}/folders/{folder_id}/processFile/{file_id}', 'DrawingsController@processFile');
Route::resource('project/{id}/folders/{folder_id}/drawings', 'DrawingsController', [ 'as' => 'Drawings - Drawings' ]);

Route::resource('project/{id}/folders', 'FolderController', [ 'as' => 'Drawings - Folder' ]);



/*
|--------------------------------------------------------------------------
| Photos
|--------------------------------------------------------------------------
*/

Route::resource('project/photos', 'PhotosFolderController');
Route::resource('project/photos/subfolders', 'PhotosSubFolderController');


/*
|--------------------------------------------------------------------------
| Contacts
|--------------------------------------------------------------------------
*/

Route::resource('contacts', 'ContactsController', [ 'as' => 'Contacts' ]);

Route::resource('contacts/persons', 'PersonsController', [ 'as' => 'Contacts - Persons' ]);
Route::resource('contacts/companies', 'CompaniesController', [ 'as' => 'Contacts - Companies' ]);

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

Route::get('getSubAjax', 'TransferController@ajaxSubCategories');
Route::resource('project/{id}/equipment', 'TransferController', [ 'as' => 'Equipment - Overview' ]);
//transfers AJAX

Route::resource('project/{id}/trucking', 'TruckingController', [ 'as' => 'Equipment - Truckings']);
Route::get('project/{id}/equipment/forecasting', 'ProjectEquipmentController@forecasting')->name('Equipment - Forecasting');
Route::get('project/{id}/equipment/truckinglog', 'ProjectEquipmentController@truckinglog')->name('Equipment - Trucking Log');
Route::get('project/{id}/equipment/rental', 'ProjectEquipmentController@rental')->name('Equipment - Rental');

Route::get('project/equipment/newrequirement', 'RequirementController@create')->name('Equipment - New Requirement');
