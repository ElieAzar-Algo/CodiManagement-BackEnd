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

//BranchController
Route::get('/branch','BranchController@index');
Route::get('/branch/{id}','BranchController@show');

//CohortController
Route::get('/cohort','CohortController@index');
Route::get('/cohort/{id}','CohortController@show');

//AttendanceController
Route::get('/attendance/{from}/{to}/{id}','AttendanceController@index');
Route::get('/attendance/{date}','AttendanceController@show');
Route::post('/attendance','AttendanceController@store');
Route::delete('/attendance/{id}','AttendanceController@destroy');

//UserAttendanceController
Route::put('/userAttendance/{id}','UserAttendanceController@update');

//UserAbsenceRequestController
Route::get('/UserAbsenceRequest/{requestDate}','UserAbsenceRequestController@index');
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
