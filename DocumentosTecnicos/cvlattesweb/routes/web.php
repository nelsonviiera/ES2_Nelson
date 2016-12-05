<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/userlist', 'UsersController@index');

	//$repository = app()->make('cvlattesweb\Repositories\UserRepository');
	//return $repository->all();

Route::get('/documentlist', function(){

	$repository = app()->make('cvlattesweb\Repositories\DocumentRepository');
	return $repository->all();

});

Route::get('/collegelist', function(){

	$repository = app()->make('cvlattesweb\Repositories\CollegeRepository');
	return $repository->all();

});

