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

Route::get('test', function(){

	$repository = app()->make('cvlattes\Repositories\CollegeRepository');
	return $repository->all();

});

Route::get('admin/users', 'UsersController@index');
Route::get('admin/users/create', ['as'=>'admin.users.create', 'uses'=>'UsersController@create']);
Route::post('admin/users/store', ['as'=>'admin.users.store', 'uses'=>'UsersController@store']);