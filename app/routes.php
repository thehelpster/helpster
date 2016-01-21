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
	return View::make('hello');
});

Route::get('/navigation', 'HomeController@showNavbar');

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

Route::get('login', 'UsersController@create');
Route::post('login', 'UsersController@store');
Route::get('volunteer.create', 'VolunteerController@createProfile');
Route::post('volunteer.create', 'VolunteerController@storeProfile');
Route::get('volunteer.edit', 'VolunteerController@editProfile');
Route::get('organization.create', 'OrganizationController@createOrganization');
Route::get('organization.edit', 'OrganizationController@editOrganization');
Route::post('organization.edit', 'OrganizationController@postOrganization');
Route::post('organization.create', 'OrganizationController@storeOrganization');
Route::get('events.create', 'EventController@createEvents');
Route::get('events.edit', 'EventController@editEvents');
Route::post('events.edit', 'EventController@postEvents');
Route::post('events.create', 'EventController@storeEvents');
