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
return view('pages.welcome');
});
Auth::routes();

Route::prefix('home')->group(function(){
	Route::get('/', 'HomeController@index');
	Route::get('/edcontent', 'HomeController@getEDContent');
	Route::get('/edcontent/EDFormA', 'HomeController@getEDFormA');
	Route::get('/edcontent/EDFormB', 'HomeController@getEDFormB');
	Route::get('/edcontent/EDFormC', 'HomeController@getEDFormC');
});


/*route for admin login*/
Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	Route::get('/userList', 'AdminController@getuserList');
	Route::post('/userList/delete/{id}', 'AdminController@destroy')->name('delete.user');
	Route::post('/addUser/', 'AdminController@goToRegister')->name('addUser.user');
	Route::post('/register/', 'AdminController@create')->name('create.user');
});
