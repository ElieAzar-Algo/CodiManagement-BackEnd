<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//UserAuthController
Route::post('/user/register', 'UserAuthController@register');
Route::post('/user/login', 'UserAuthController@login');
Route::post('/user/logout', 'UserAuthController@logout');

//AdminAuthController
Route::post('/admin/register', 'AdminAuthController@register');
Route::post('/admin/login', 'AdminAuthController@login');
Route::post('/admin/logout', 'AdminAuthController@logout');

//RoleController
Route::resource('/role','RoleController');

//AdminController
Route::get('/admin','AdminController@index');
Route::get('/admin/{id}','AdminController@show');
Route::get('/searchAdmin/{name}','AdminController@search');
Route::post('/admin','AdminController@store');
Route::put('/admin/{id}','AdminController@update');
Route::delete('/admin/{id}','AdminController@destroy');

//UserController
Route::get('/users','UserController@index');
Route::get('/user/{id}','UserController@show');
Route::get('/searchUser/{field}/{value}','UserController@search');
Route::post('/user','UserController@store');
Route::put('/user/{id}','UserController@update');
Route::patch('/user/{id}','UserController@edit');
Route::delete('/user/{id}','UserController@destroy');

//BranchController
Route::get('/branch','BranchController@index');
Route::get('/branch/{id}','BranchController@show');
Route::post('/branch','BranchController@store');
Route::put('/branch/{id}','BranchController@update');
Route::delete('/branch/{id}','BranchController@destroy');

//CohortController
Route::get('/cohort','CohortController@index');
Route::get('/only-cohorts','CohortController@onlyCohorts');
Route::get('/cohort/{id}','CohortController@show');
Route::get('/searchCohort/{value}','CohortController@search');
Route::post('/cohort','CohortController@store');
Route::put('/cohort/{id}','CohortController@update');
Route::delete('/cohort/{id}','CohortController@destroy');

//AttendanceController
Route::get('/attendance/{from}/{to}/{id}','AttendanceController@index');
Route::get('/attendance/{date}','AttendanceController@show');
Route::post('/attendance','AttendanceController@store');
Route::delete('/attendance/{id}','AttendanceController@destroy');

//UserAttendanceController
Route::put('/userAttendance/{id}','UserAttendanceController@update');

//UserAbsenceRequestController
Route::get('/UserAbsenceRequest/{requestDate}','UserAbsenceRequestController@index');
Route::get('/UserAbsenceRequest-user/{userId}','UserAbsenceRequestController@showByUser');
Route::post('/UserAbsenceRequest','UserAbsenceRequestController@store');
Route::put('/UserAbsenceRequest/{id}','UserAbsenceRequestController@update');
Route::delete('/UserAbsenceRequest/{id}','UserAbsenceRequestController@destroy');
//get start absence date
Route::get('/UserAbsenceStart/{absence_start_date}','UserAbsenceRequestController@show');


Route::group(['prefix' => 'admin', 'middleware' => ['assign.guard:admins','jwt.auth']],function ()
{
  
    
});

Route::group(['prefix' => 'user', 'middleware' => ['assign.guard:api','jwt.auth']],function ()
{
    
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
