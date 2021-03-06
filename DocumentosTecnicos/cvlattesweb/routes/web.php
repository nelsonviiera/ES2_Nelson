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

Route::get('/userlist', ['as'=>'userlist', 'uses'=>'UsersController@index']);

Route::get('/documentlist', ['as'=>'documentlist', 'uses'=>'DocumentsController@index']);

Route::get('/documentcreate', ['as'=>'documentcreate', 'uses'=>'DocumentsController@create']);

Route::post('/documentstore', ['as'=>'documentstore', 'uses'=>'DocumentsController@store']);

Route::get('/documentremove/{id}', ['as'=>'documentremove', 'uses'=>'DocumentsController@remove']);

Route::get('/collegelist', function(){

	$repository = app()->make('cvlattesweb\Repositories\CollegeRepository');
	return $repository->all();

});

