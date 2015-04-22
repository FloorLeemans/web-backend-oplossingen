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

Route::get('/', 'PageController@index');

Route::get('login', 'GuestController@login');
Route::get('register', 'GuestController@register');

Route::get('dashboard', 'LoginController@index');

Route::get('todo', 'TodoController@index');
Route::get('todo/create', 'TodoController@create');
Route::post('todo', 'TodoController@store');
Route::get('todo/activate/{id}', 'TodoController@update');
Route::get('todo/delete/{id}', 'TodoController@destroy');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);