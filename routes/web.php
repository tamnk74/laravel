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

Route::group(['middleware' => ['auth'], 'prefix' => 'backend'], function() {

    Route::get('/', 'HomeController@index');
	Route::get('/home', 'HomeController@index');

    Route::resource('users','UserController', ['middleware' =>'permission:user-manager']);

    Route::resource('roles', 'RoleController', ['middleware' =>	'permission:role-manager']);

    Route::resource('permissions', 'PermissionController', ['middleware' => 'permission:permission-manager']);

    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::match(['put', 'patch'], 'profiles/update', 'ProfileController@update')->name('profiles.update');
    Route::get('profiles/edit', 'ProfileController@edit')->name('profiles.edit');

});


