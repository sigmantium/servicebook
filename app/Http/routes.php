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

/*Service Routes*/
Route::resource('services', 'ServicesController');

/*Company Routes*/
Route::resource('companies', 'CompaniesController');

/*Contact Routes*/
Route::resource('contacts', 'ContactsController');

/*Vehicle Routes*/
Route::resource('vehicles', 'VehiclesController');
Route::get('vehicles/createMake', 'VehiclesController@createMake');
Route::get('vehicles/createModel', 'VehiclesController@createModel');
Route::get('vehicles/vehicleMakes', 'VehiclesController@vehicleMakes');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
