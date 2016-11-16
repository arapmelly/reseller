<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	if(Confide::user()){
		return View::make('resources');
	} else {

		return View::make('login');
	}
});
//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');


Route::resource('deals', 'DealsController');
Route::get('deals/create', 'DealsController@create');
Route::get('deals/update/{id}', 'DealsController@edit');
Route::get('deals/destroy/{id}', 'DealsController@destroy');


Route::get('resources', function()
{
	if(Confide::user()){
		return View::make('resources');
	} else {

		return View::make('login');
	}
});
