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

Route::auth();

Route::group(['middleware' => ['auth']], function() {

	Route::get('/home', 'HomeController@index');

    Route::resource('users','UserController', ['only' => ['create', 'store'], 'middleware' =>
        'permission:user-create']);
    Route::resource('users','UserController', ['only' => ['edit', 'update'], 'middleware' =>
        'permission:user-update']);
    Route::resource('users','UserController', ['only' => ['show'], 'middleware' =>
        'permission:user-show']);
    Route::resource('users','UserController', ['only' => ['destroy'], 'middleware' =>
        'permission:user-delete']);
    Route::resource('users','UserController', ['only' => ['index'], 'middleware' =>
        'permission:user-list']);

    Route::resource('roles', 'RoleController', ['middleware' =>
		'permission:role-list']);

    Route::resource('permissions', 'PermissionController', ['middleware' =>
        'permission:permission-manage']);

	Route::resource('roles', 'RoleController', ['only' => ['index', 'show'], 'middleware' => 
		'permission:role-list']);

	Route::resource('roles', 'RoleController',['except' => ['index', 'show'], 'middleware' => 
		'permission:role-manage']);	
});


