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
		return view('enter');
		});


		Route::resource('client','clientController');

		Auth::routes();

		Route::get('/search','clientController@search')->name('client.search');

		Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('register');

		Route::post('/add_log','clientController@addlog')->name('add_log');

		Route::get('/home', 'HomeController@index');

		Route::prefix('admin')->group(function() {
		Route::get('/user_list', 'AdminController@show_user_list')->name('admin.show_user_list');	
		Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
		Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
		Route::get('/', 'AdminController@index')->name('admin.dashboard');
		Route::get('/register', 'AdminController@register')->name('admin.register');
		Route::get('/edit/{uid}', 'AdminController@user_edit')->name('admin.edit_user');
		Route::DELETE('/delete/{uid}', 'AdminController@delete')->name('admin.delete_user');
		Route::PATCH('/update/{uid}', 'AdminController@update')->name('admin.update');
		});