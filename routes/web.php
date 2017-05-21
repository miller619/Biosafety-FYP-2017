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

Route::prefix('home')->group(function(){
	Route::get('/', 'HomeController@index');
	
	Route::prefix('lmocontent')->group(function(){
		Route::get('/', 'HomeController@getlmoContent');
		Route::get('/lmoFormA', 'HomeController@getlmoFormA');
		Route::get('/lmoFormF', 'HomeController@getlmoFormF');
		Route::get('/lmoFormB', 'HomeController@getlmoFormB');
		Route::get('/lmoFormC', 'HomeController@getlmoFormC');
		Route::get('/lmoFormD', 'HomeController@getlmoFormD');
		Route::get('/lmoFormE', 'HomeController@getlmoFormE');
	});

	Route::prefix('edcontent')->group(function(){
		Route::get('/', 'HomeController@getEDContent');
		Route::get('/EDFormA', 'HomeController@getEDFormA');
		Route::get('/EDFormB', 'HomeController@getEDFormB');
		Route::post('/EDFormB1/submit', 'EDFormB1Controller@create');
		
	
		Route::post('/EDFormB2/Submit', 'EDFormB2Controller@create');


		Route::post('/EDFormB3/Submit', 'EDFormB3Controller@create');
		
		Route::post('/EDFormB3_2/Submit', 'EDFormB3_2Controller@create');
		
		Route::post('/EDFormB4/Submit', 'EDFormB4Controller@create');
	});

	Route::prefix('bmcontent')->group(function(){
		Route::get('/', 'HomeController@getEDContent');
		Route::get('/bmFormA', 'HomeController@getbmFormA');
		Route::get('/bmFormB', 'HomeController@getbmFormB');
		Route::get('/bmFormC', 'HomeController@getbmFormC');
	});

	/*PROCUREMENT form unavailable*/
	Route::prefix('Procurement')->group(function(){
		Route::get('/', 'HomeController@getProcurement');
		//Route::get('/expedbmForm', 'HomeController@getExportingedbmForm');
	});

	/*notification controller routes for user,
	1. show the notification main page
	2. route to 2 forms
	3. fill forms and forms and submit.
	*/
	Route::prefix('notification')->group(function(){
		/*show notification main page*/
		Route::get('/', 'HomeController@getNotificationPage')->name('show.go_to_notification');
		/*route to lmo_notification_form*/
		Route::get('/personal_information_notification_form', 'HomeController@getNotificationForm');
		/*route to biohazardous material notification form*/
		Route::post('personal_information_notification_form/submit', 'NotificationController@create')->name('submit.personal_info_for_notification');
		Route::get('/biohazardous_material_notification_form', 'HomeController@getotherNotificationForm')->name('show.biohazardous_material_notification_form');
		/*post living modified organism list*/
		Route::post('/personal_information_notification_form/add_lmo/', 'NotificationTypeAController@create')->name('submit.add_lmo');



		Route::get('/notification_application/{user_id}/{notification_id}', 'NotificationController@getNotificationApplication')->name('show.notification_application');
	});

	Route::prefix('exportinglmo')->group(function(){
		Route::get('/', 'HomeController@getExportLmo');
		Route::get('/explmoForm', 'HomeController@getExportingLmoForm');
	});

	Route::prefix('exportingedbm')->group(function(){
		Route::get('/', 'HomeController@getExportEdbm');
		Route::get('/expedbmForm', 'HomeController@getExportingedbmForm');
	});

	Route::prefix('accidentlmo')->group(function(){
		Route::get('/', 'HomeController@getAccidentLmo');
		Route::get('/MinorAccidentForm', 'HomeController@getMinorAccidentForm');
		Route::get('/MajorAccidentform', 'HomeController@getmajorAccidentform');
		Route::get('/OHSAccidentForm', 'HomeController@getOHSAccidentForm');
	});

	Route::prefix('accidentedbm')->group(function(){
		Route::get('/', 'HomeController@getAccidentMinor');
		Route::get('/accidentdbmForm', 'HomeController@getOHSAccidentForm');
	});

	Route::prefix('annualreport')->group(function(){
		Route::get('/', 'HomeController@getreportpage');
		Route::get('/annual_report_formA', 'HomeController@getreportFormA');
		Route::get('/annual_report_formB', 'HomeController@getreportFormB');
		Route::get('/annual_report_formC', 'HomeController@getreportFormC');
	});

	
	
});


Route::resource('/profile', 'UserController');
/*route for admin login*/
Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('profile/create', 'UserController@create')->name('admin.profile.create');
	Route::post('profile', 'UserController@store')->name('admin.profile.store');

	Route::get('/userList', 'AdminController@getuserList')->name('admin.userList');
	Route::get('/admin_profile/{admin_id}', 'AdminController@show')->name('admin.show');

	Route::get('/notification_list/', 'AdminController@adminNotificationList')->name('admin.notification_list');

	Route::get('/notification_list/notification_application/{user_id}/{notification_id}', 'AdminController@adminGetEachNotification')->name('show.notification_application');

	Route::get('/notification_list/notification_application/{notification_id}', 'AdminController@approveNotification')->name('show.approve_notification_application');

	Route::get('/clearence_list/', 'AdminController@adminClearenceList')->name('Clearence.clearence_admin');

	Route::get('/clearence_list/Clearence_application/{user_id}/{id}', 'AdminController@adminGetEachClearence')->name('Clearence.admin_clearence_application');
	
	Route::get('/userList', 'AdminController@getuserList')->name('admin.userList');
	Route::get('/adminProfile', 'AdminController@show2')->name('admin.adminProfile');

	Route::get('/notification_list/notification_application/{notification_id}', 'AdminController@approveClearence')->name('show.approve_clearence_application');

});


