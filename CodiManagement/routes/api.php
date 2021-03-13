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
Route::post('/user/register', 'UserAuthController@register');
Route::post('/user/login', 'UserAuthController@login');
Route::post('/user/logout', 'UserAuthController@logout');

Route::post('/admin/register', 'AdminAuthController@register');
Route::post('/admin/login', 'AdminAuthController@login');
Route::post('/admin/logout', 'AdminAuthController@logout');

Route::get('/branch','BranchController@index');
Route::get('/branch/{id}','BranchController@show');

Route::get('/cohort','CohortController@index');
Route::get('/cohort/{id}','CohortController@show');

Route::get('/attendance/{from}/{to}/{id}','AttendanceController@index');
Route::get('/attendance/{date}','AttendanceController@show');
Route::post('/attendance','AttendanceController@store');
Route::delete('/attendance/{id}','AttendanceController@destroy');

//UserAttendanceController
Route::put('/userAttendance/{id}','UserAttendanceController@update');

//RoleController
Route::resource('/role','RoleController');



Route::group(['prefix' => 'admin', 'middleware' => ['assign.guard:admins','jwt.auth']],function ()
{
  
    
});

Route::group(['prefix' => 'user', 'middleware' => ['assign.guard:api','jwt.auth']],function ()
{
    
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
