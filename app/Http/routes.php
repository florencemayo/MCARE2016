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

Route::get('/', function () {
    return view('index');
});

/*Route::get('/', function () {
    return view('welcome');
});*/

/**
 * Bills routes
 *
 */
Route::get('bills', 'BillsController@index');
Route::get('bills/{id}', 'BillsController@show');
Route::post('bills', 'BillsController@store');
Route::post('bills/{id}', 'BillsController@update');
Route::post('bills/delete/{id}', 'billsController@destroy');

/**
 * Clinics routes
 *
 */
Route::get('clinics', 'ClinicsController@index');
Route::get('clinics/{id}', 'ClinicsController@show');
Route::post('clinics', 'ClinicsController@store');
Route::post('clinics/{id}', 'ClinicsController@update');
Route::post('clinics/delete/{id}', 'ClinicsController@destroy');

/**
 * Departments routes
 *
 */
Route::get('departments', 'DepartmentsController@index');
Route::get('departments/{id}', 'DepartmentsController@show');
Route::post('departments', 'DepartmentsController@store');
Route::post('departments/{id}', 'DepartmentsController@update');
Route::post('departments/delete/{id}', 'DepartmentsController@destroy');

/**
 * Newborns routes
 *
 */
Route::get('newborns', 'NewbornsController@index');
Route::get('newborns/{id}', 'NewbornsController@show');
Route::post('newborns', 'NewbornsController@store');
Route::post('newborns/{id}', 'NewbornsController@update');
Route::post('newborns/delete/{id}', 'NewbornsController@destroy');

/**
 * Patients routes
 *
 */
Route::get('patients', 'PatientsController@index');
Route::get('patients/{id}', 'PatientsController@show');
Route::post('patients', 'PatientsController@store');
Route::post('patients/{id}', 'PatientsController@update');
Route::post('patients/delete/{id}', 'PatientsController@destroy');

Route::get('users', 'UsersController@index');
Route::get('users/{id}', 'UsersController@show');
Route::post('users', 'UsersController@store');
Route::post('users/{id}', 'UsersController@update');
Route::post('users/delete/{id}', 'UsersController@destroy');

/**
 * Rooms routes
 *
 */
Route::get('rooms', 'RoomsController@index');
Route::get('rooms/{id}', 'RoomsController@show');
Route::post('rooms', 'RoomsController@store');
Route::post('rooms/{id}', 'RoomsController@update');
Route::post('rooms/delete/{id}', 'RoomsController@destroy');

/**
 * Services routes
 *
 */
Route::get('services', 'ServicesController@index');
Route::get('services/{id}', 'ServicesController@show');
Route::post('services', 'ServicesController@store');
Route::post('services/{id}', 'ServicesController@update');
Route::post('services/delete/{id}', 'ServicesController@destroy');

/**
 * Bookings routes
 *
 */
Route::get('bookings', 'BookingsController@index');
Route::get('bookings/{id}', 'BookingsController@show');
Route::post('bookings', 'BookingsController@store');
Route::post('bookings/{id}', 'BookingsController@update');
Route::post('bookings/delete/{id}', 'BookingsController@destroy');

/**
 * Bookings routes
 *
 */
Route::get('beds', 'BedsController@index');
Route::get('beds/{id}', 'BedsController@show');
Route::post('beds', 'BedsController@store');
Route::post('beds/{id}', 'BedsController@update');
Route::post('beds/delete/{id}', 'BedsController@destroy');

/**
 * Address routes
 *
 */
Route::get('address', 'AddressController@index');
Route::get('address/{id}', 'AddressController@show');
Route::post('address', 'AddressController@store');
Route::post('address/{id}', 'AddressController@update');
Route::post('address/delete/{id}', 'AddressController@destroy');

/**
 * Doctors routes
 *
 */
Route::get('doctors', 'DoctorsController@index');
Route::get('doctors/{id}', 'DoctorsController@show');
Route::post('doctors', 'DoctorsController@store');
Route::post('doctors/{id}', 'DoctorsController@update');
Route::post('doctors/delete/{id}', 'DoctorsController@destroy');

/**
 * Ward routes
 *
 */
Route::get('ward', 'WardController@index');
Route::get('ward/{id}', 'WardController@show');
Route::post('ward', 'WardController@store');
Route::post('ward/{id}', 'WardController@update');
Route::post('ward/delete/{id}', 'WardController@destroy');
