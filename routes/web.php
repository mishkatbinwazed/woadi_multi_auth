<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
// Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');
// Route::get('/user', 'UserController@index')->name('user')->middleware('user');

Route::get('/login', 'Auth\LoginController@form')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Routes for admins

Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin', 'AdminController@index')->name('admin');

	Route::get('/', function () {
	    return redirect()->route('admin');
	});

	Route::get('admin/customers', 'AdminCustomersController@index')->name('admin.customers');
	Route::get('admin/customers/create', 'AdminCustomersController@create')->name('admin.customers.create');
	Route::post('admin/customers', 'AdminCustomersController@store')->name('admin.customers.store');
	Route::get('admin/customers/{customer}', 'AdminCustomersController@show')->name('admin.customers.show');
	Route::get('admin/customers/{customer}/edit', 'AdminCustomersController@edit')->name('admin.customers.edit');
	Route::put('admin/customers/{customer}', 'AdminCustomersController@update')->name('admin.customers.update');
	Route::delete('admin/customers/{customer}', 'AdminCustomersController@destroy')->name('admin.customers.destroy');

	Route::get('admin/{id}/customers', 'AdminController@selectCustomer')->name('admin.selected.customers');
});

// Routes for managers

Route::group(['middleware' => 'manager'], function(){
	Route::get('/manager', 'ManagerController@index')->name('manager');
});

// Routes for users

Route::group(['middleware' => 'user'], function(){
	Route::get('/users', 'UserController@index')->name('users');

	Route::get('/', function () {
	    return redirect()->route('users');
	});

	Route::get('users/customers', 'UsersCustomersController@index')->name('users.customers');
	Route::get('users/customers/create', 'UsersCustomersController@create')->name('users.customers.create');
	Route::post('users/customers', 'UsersCustomersController@store')->name('users.customers.store');
	Route::get('users/customers/{customer}', 'UsersCustomersController@show')->name('users.customers.show');
	Route::get('users/customers/{customer}/edit', 'UsersCustomersController@edit')->name('users.customers.edit');
	Route::put('users/customers/{customer}', 'UsersCustomersController@update')->name('users.customers.update');
	Route::delete('users/customers/{customer}', 'UsersCustomersController@destroy')->name('users.customers.destroy');

	Route::get('users/{id}/customers', 'UserController@selectCustomer')->name('users.selected.customers');
});