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
    return view('welcome');
});

Route::group(['middlewareGroups' => ['web'] ], function () {
	// Authentication routes...
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');

	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
});

Route::group(['middlewareGroups' => ['web', 'auth'] ], function () {
	Route::get('calculator/datatable', 'CalculatorController@datatable');

	Route::get('company/datatable', 'CompanyController@datatable');
	Route::resource('company', 'CompanyController');

    Route::get('company/{company}/employees', [
        'as' => 'company.employees', 'uses' => 'CompanyController@employees'
    ]);

	Route::resource('operating_expense', 'OperatingExpenseController');
	Route::resource('calculator', 'CalculatorController');

    Route::get('employee/{company}/datatable', 'EmployeeController@datatable');
    Route::resource('employee', 'EmployeeController');

	// Authentication routes...
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('logout', 'Auth\AuthController@getLogout');

	// Registration routes...
	Route::get('register', 'Auth\AuthController@getRegister');
	Route::post('register', 'Auth\AuthController@postRegister');
});