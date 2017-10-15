<?php

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', 'GuestController@index');
Route::get('/forbidden', 'GuestController@forbidden');
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

Route::get('region/set/{id}', 'RegionsController@set_region');

/*
|--------------------------------------------------------------------------
| Administration company info
|--------------------------------------------------------------------------
*/

Route::resource('admin/company', 'AdminCompanyController', [ 'as' => 'Admin - Company' ]);

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

Route::resource('estimate/archive', 'EstimatingArchiveController', [ 'as' => 'Estimating - Archive' ]);

Route::resource('estimate', 'EstimateController', [ 'as' => 'Estimating' ]);

Route::resource('estimate/{project_id}/bids', 'BidController', [ 'as' => 'Estimating - Bids' ]);

Route::resource('estimate/{project_id}/notes', 'NotesController', [ 'as' => 'Estimating - Notes' ]);

Route::resource('estimate/{project_id}/mailing', 'NotesMailingController', [ 'as' => 'Estimating - Mailing' ]);

Route::resource('estimate/{project_id}/client', 'AddedClientController', [ 'as' => 'Estimating - Client' ]);



/*
|--------------------------------------------------------------------------
| Drawings
|--------------------------------------------------------------------------
*/

//Route::resource('drawings', 'DrawingsController', [ 'as' => 'Drawings' ]);

//Route::get('drawings/layout', 'DrawingsController@layout')->name('Drawings - Layout');
//Route::get('drawings/list', 'DrawingsController@List')->name('Drawings - List');

Route::get('lambda/{id}/{filename}/{folder_id}/{project_id}/{file_id}/{page_nb}', 'DrawingsController@lambda');

Route::get('lambda_status/{project_id}/{folder_id}/{file_id}', 'DrawingsController@lambda_status');

Route::post('project/{project_id}/folders/{folder_id}/saveFile', 'UploadsController@saveToDB');
 
Route::get('project/{id}/folders/{folder_id}/processFile/{file_id}', 'DrawingsController@processFile');
Route::get('project/{id}/folders/{folder_id}/thumbnailView/{file_id}', 'DrawingsController@thumbnailView');
Route::get('project/{id}/folders/{folder_id}/drawingView/{drawing_id}', 'DrawingsController@drawingView');


Route::resource('project/{id}/folders/{folder_id}/drawings', 'DrawingsController', [ 'as' => 'Drawings - Drawings' ]);

Route::resource('project/{id}/folders', 'FolderController', [ 'as' => 'Drawings - Folder' ]);



/*
|--------------------------------------------------------------------------
| Photos
|--------------------------------------------------------------------------
*/
Route::get('project/{id}/findsubfolder','PhotosSubFolderController@findSubfolder');//ajax dynamic dropdown
Route::resource('project/{id}/photos', 'PhotosController');


Route::resource('project/{id}/folder', 'PhotosFolderController');
Route::resource('project/{id}/subfolder', 'PhotosSubFolderController');


/*
|--------------------------------------------------------------------------
| Contacts
|--------------------------------------------------------------------------
*/

Route::resource('contacts', 'ContactsController', [ 'as' => 'Contacts' ]);
Route::get('/contacts/persons/{id}/getLocationAjaxEdit', 'ContactsController@getLocationAjaxEdit');
Route::get('/contacts/persons/getLocationAjax', 'ContactsController@getLocationAjax');
Route::get('/contacts/person/getCompanyInfoAjax', 'ContactsController@getCompanyAjax');
Route::get('/contacts/company/getRegions', 'ContactsController@getRegionsAjax');
Route::resource('contacts/persons', 'PersonsController', [ 'as' => 'Contacts - Persons' ]);
Route::resource('contacts/companies', 'CompaniesController', [ 'as' => 'Contacts - Companies' ]);

/*
|--------------------------------------------------------------------------
| Main Equipment
|--------------------------------------------------------------------------
*/

Route::get('equipment/overview', 'EquipmentController@index')->name('Equipment - Overview');
Route::get('equipment/forecasting', 'EquipmentController@forecasting')->name('Equipment - Forecasting');
Route::get('equipment/rental', 'EquipmentController@rental')->name('Equipment - Rental');
Route::get('equipment/allocation', 'EquipmentController@allocation')->name('Equipment - Allocation');
Route::get('project/approvetruck', 'EquipmentController@approvetruck')->name('Equipment - Approvetruck');

//equipment management
Route::resource('/equipment/eqmanagement', 'CategoryController', [ 'as' => 'Equipment - Management' ]);
Route::resource('/equipment/subcategories', 'SubCategoryController', [ 'as' => 'Equipment - Subcategories' ]);
Route::resource('/equipment/regionequipment', 'RegionEquipmentController', [ 'as' => 'Equipment - Regions' ]);

//inventory
Route::get('/equipment/getSubAjax', 'AjaxCallsController@inventorySubCategories');
Route::resource('/equipment/inventory', 'InventoryController', ['as' => 'Equipment - Inventory']);
/*
|--------------------------------------------------------------------------
| Project Equipment
|--------------------------------------------------------------------------
*/

//transfers AJAX
Route::get('project/{id}/equipment/getSubAjax', 'AjaxCallsController@transferSubCategories');
Route::get('project/{id}/equipment/getEqWeight', 'AjaxCallsController@equipmentWeight');

//transfers
Route::resource('project/{id}/equipment', 'TransferController', [ 'as' => 'Equipment - Overview' ]);

//truckings AJAX
Route::get('project/{id}/trucking/getSubAjax', 'AjaxCallsController@truckingSubCategories');
Route::get('project/{id}/trucking/getEqWeight', 'AjaxCallsController@equipmentWeightTrucking');

//truckings
Route::resource('project/{id}/trucking', 'TruckingController', [ 'as' => 'Equipment - Truckings']);

//forecasting
Route::get('project/{id}/forecasting/getSubAjax', 'AjaxCallsController@reqSubCategories');
Route::get('project/{id}/forecasting/getEqWeight', 'AjaxCallsController@equipmentWeightReq');

Route::resource('project/{id}/forecasting', 'ForecastingController', [ 'as' => 'Equipment - Forecasting' ]);


Route::get('project/{id}/equipment/truckinglog', 'ProjectEquipmentController@truckinglog')->name('Equipment - Trucking Log');
Route::get('project/{id}/equipment/rental', 'ProjectEquipmentController@rental')->name('Equipment - Rental');

Route::get('project/equipment/newrequirement', 'RequirementController@create')->name('Equipment - New Requirement');
