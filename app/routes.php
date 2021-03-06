<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::controller('/', 'HomeController@index');
Route::get('/','HomeController@index');
Route::any('/login','HomeController@login');
Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});
Route::get('/membership', 'HomeController@membership');
Route::get('/package', 'HomeController@package');
Route::any('/forgotpassword', 'HomeController@forgotpassword');
Route::any('/resetpassword/{token}', 'HomeController@resetpassword');

Route::get('/registration', 'RegistrationController@getUserRegister');
Route::post('/registration', 'RegistrationController@postUserRegister');


Route::any('/email-check', 'RegistrationController@emailCheck');
Route::get('/registration-welcome', 'RegistrationController@registrationWelcome');
Route::get('/create-account', 'RegistrationController@createAccount');
Route::get('/account-welcome', 'RegistrationController@accountWelcome');
Route::any('/member-home', 'MemberDashboardController@index');
Route::any('/view-profile/{id}', 'MemberDashboardController@viewProfile');
Route::any('/edit-profile/{id}', 'MemberDashboardController@editProfile');
Route::any('/confirm/{code}', 'RegistrationController@confirm');
Route::any('/get-in-touch', 'HomeController@contactUs');
Route::get('/terms-conditions', 'HomeController@termsConditions');
Route::get('/agencies-support', 'HomeController@agenciesSupport');

// Route::get('/about', function()
// {
// 	echo 'Here in Routes';//return View::make('hello');
// });

// Route::get('/admin/login/index', function()
// {
// 	return View::make('admin/login');
// });
//Route::get('/admin/login', 'UserController@login');
Route::group(array('prefix' => 'admin'), function() {
    Route::resource('/', 'admin\UserController@login');
});
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
    Route::resource('dashboard', 'admin\DashboardController@index');
});
Route::group(array('prefix' => 'admin'), function() {
    Route::resource('forgotpassword', 'admin\UserController@forgotPassword');
});
Route::get('admin/logout', function()
{
    Auth::logout();
    return Redirect::to('/admin');
});
Route::group(array('prefix' => 'admin'), function() {
    Route::any('resetpassword/{token}', 'admin\UserController@resetPassword');
});
//Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
//    Route::resource('managesubadmin', 'admin\MemberController@manageSubAdmin');
//});
//
//
//Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
//    Route::resource('edit-subadmin/{id}', 'admin\MemberController@editSubAdmin');
//});
//Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
//    Route::resource('delete-subadmin/{subadminId}', 'admin\MemberController@deleteSubAdmin');
//});


Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {

    Route::get('managesubadmin', 'SubadminController@getIndex');
    Route::get('edit-subadmin/{id}', 'SubadminController@getEdit');
    Route::get('delete-subadmin/{id}', 'SubadminController@getDelete');
    Route::post('edit-subadmin/{id}', 'SubadminController@postEdit');
    Route::get('addsubadmin', 'SubadminController@getCreate');
    Route::post('addsubadmin', 'SubadminController@postCreate');


});