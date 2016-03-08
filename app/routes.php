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

Route::get('/', 'HomeController@showWelcome');
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');
Route::post('contact', 'UsersController@doContact');
Route::get('users/create2', 'UsersController@create2');
Route::get('/search',['uses' => 'SearchController@getSearch','as' => 'search']);


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

Route::get('events/register/{id}', 'EventsController@register');
Route::post('events/register/{id}', 'EventsController@makeEventReservation');
Route::get('/events/rsvps/{id}', 'EventsController@viewUsers');

Route::get('/volunteers/view/{id}', 'VolunteerController@viewProfile');
Route::get('/volunteers/view/{id}', 'VolunteerController@viewUser');

Route::resource('/events', 'EventsController');
Route::resource('/organization', 'OrganizationsController');
Route::resource('/users', 'UsersController');