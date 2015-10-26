<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('top', 'HomeController@topMenu');
Route::get('right', 'HomeController@rightMenu');
Route::post('postDailyNote', 'HomeController@storeNote');

/*Service Routes*/
Route::get('services/serviceStatuses', 'ServicesController@serviceStatuses');
Route::get('services/createServiceStatuses', 'ServicesController@createServiceStatus');
Route::post('services/serviceStatuses', 'ServicesController@storeServiceStatus');
Route::resource('services', 'ServicesController');


/*Users Routes*/
Route::resource('users', 'UsersController');

/*Company Routes*/
Route::resource('companies', 'CompaniesController');

/*Contact Routes*/
Route::get('contacts/newPartial', 'ContactsController@createPartial');
Route::resource('contacts', 'ContactsController');

/*Warehouse Routes*/
Route::resource('warehouses', 'WarehousesController');

/*Vehicle Routes*/
Route::get('vehicles/createMake', 'VehiclesController@createMake');
Route::get('vehicles/vehicleMakes', 'VehiclesController@vehicleMakes');
Route::post('vehicles/vehicleMakes', 'VehiclesController@storeMake');

Route::get('vehicles/createModel', 'VehiclesController@createModel');
Route::get('vehicles/vehicleModels', 'VehiclesController@vehicleModels');
Route::post('vehicles/vehicleModels', 'VehiclesController@storeModel');


Route::get('vehicles/createScheduleKMs', 'VehiclesController@createScheduleKMs');
Route::get('vehicles/scheduleKMs', 'VehiclesController@scheduleKMs');
Route::post('vehicles/scheduleKMs', 'VehiclesController@storeScheduleKMs');

Route::get('vehicles/createScheduleTimes', 'VehiclesController@createScheduleTimes');
Route::get('vehicles/scheduleTimes', 'VehiclesController@scheduleTimes');
Route::post('vehicles/scheduleTimes', 'VehiclesController@storeScheduleTimes');

Route::resource('vehicles', 'VehiclesController');

Route::resource('departments', 'DepartmentsController');

Route::resource('fleets', 'FleetsController');

/*Inventory Routes*/

Route::get('inventory/createItemType', 'InventoryController@createItemType');
Route::get('inventory/itemTypes', 'InventoryController@itemTypes');
Route::post('inventory/itemTypes', 'InventoryController@storeItemType');
Route::resource('inventory', 'InventoryController');

//AJAX REQUESTS

Route::post('/ajax/toggleSideBar', function() {
	if (Session::get('sideBarToggle')) {
		Session::forget('sideBarToggle');
	}
	else {
		Session::put('sideBarToggle', '1');
	}
});
Route::get('ajax/completeNote/{id}', 'HomeController@completeNote');
Route::get('ajax/viewNote/{id}', 'HomeController@viewNote');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*Search Routes*/
route::get('/search/company', 'SearchController@companyQuery');
route::get('/search/department', 'SearchController@departmentQuery');
route::get('/search/vehicleMake', 'SearchController@vehicleMakeQuery');
route::get('/search/vehicleModel', 'SearchController@vehicleModelQuery');
route::get('/search/contact', 'SearchController@contactQuery');