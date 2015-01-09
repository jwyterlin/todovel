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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// Routes created by me

// Parameter 'user' is required
Route::get('/hello/{user}', 'WelcomeController@hello');

// Parameter 'user' is optional
Route::get('/hello/{user?}', 'WelcomeController@hello');

// Adding Tasks
Route::get('task/add', 'TaskController@getAdd');
Route::post('task/add', 'TaskController@postAdd');

// Listing tasks
Route::any('task', 'TaskController@listAllTasks');
Route::any('tasks', 'TaskController@listAllTasks');

// Checking tasks
Route::post('task/check', 'TaskController@check');

/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
