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
Route::get('/home', 'HomeController@index');

//load exempt dealings content
Route::get('/edcontent', 'HomeController@getEDContent');
Route::get('/EDFormA', 'HomeController@getEDFormA');
Route::get('/EDFormB', 'HomeController@getEDFormB');
Route::get('/EDFormC', 'HomeController@getEDFormC');

Route::post('/', 'PrintController@EDformA')->name('print.form');

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




