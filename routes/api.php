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
//allAdmins
Route::get('/all-admins','AdminController@allAdmins');
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
//showSkills
Route::get('/user-skills/{id}','UserController@showSkills');
//showByCohort
Route::get('/user-byCohort/{id}','UserController@showByCohort');

//BranchController
Route::get('/branch','BranchController@index');
Route::get('/branch/{id}','BranchController@show');
Route::post('/branch','BranchController@store');
Route::patch('/branch/{id}','BranchController@update');
Route::delete('/branch/{id}','BranchController@destroy');

//CohortController
Route::get('/cohort','CohortController@index');
Route::get('/only-cohorts','CohortController@onlyCohorts');
Route::get('/cohort/{id}','CohortController@show');
Route::get('/searchCohort/{value}','CohortController@search');
Route::post('/cohort','CohortController@store');
Route::Patch('/cohort/{id}','CohortController@update');
Route::delete('/cohort/{id}','CohortController@destroy');

//AttendanceController
Route::get('/attendance/{from}/{to}/{id}','AttendanceController@index');
Route::get('/attendance/{date}/{cohortId}','AttendanceController@show');
Route::post('/attendance','AttendanceController@store');
Route::delete('/attendance/{id}','AttendanceController@destroy');

//UserAttendanceController
Route::get('/attendance/{id}','UserAttendanceController@index');
Route::put('/userAttendance/{id}','UserAttendanceController@update');
Route::post('/userAttendance','UserAttendanceController@store');
Route::patch('/userAttendance/{id}','UserAttendanceController@edit');


//UserAbsenceRequestController
Route::get('/UserAbsenceRequest/{requestDate}','UserAbsenceRequestController@index');
Route::get('/UserAbsenceRequest-user/{userId}','UserAbsenceRequestController@showByUser');
Route::post('/UserAbsenceRequest','UserAbsenceRequestController@store');
Route::put('/UserAbsenceRequest/{id}','UserAbsenceRequestController@update');
Route::patch('/edit-userAbsenceRequest/{id}','UserAbsenceRequestController@edit');
Route::delete('/UserAbsenceRequest/{id}','UserAbsenceRequestController@destroy');
//get start absence date
Route::get('/UserAbsenceStart/{absence_start_date}','UserAbsenceRequestController@show');

//StageController
Route::get('/stage/{cohortId}','StageController@index');
Route::get('/stage-tasks/{id}','StageController@show');
Route::post('/stage','StageController@store');
Route::delete('/stage/{id}','StageController@destroy');
Route::patch('/stage/{id}','StageController@edit');

//TaskController
Route::post('/task','TaskController@store');
Route::delete('/task/{id}','TaskController@destroy');
Route::patch('/task/{id}','TaskController@edit');

//UsersTasksController
Route::get('/user-task/{taskId}','UsersTasksController@index');
Route::get('/user-task-individually/{userId}','UsersTasksController@indexUser');
Route::post('/user-task','UsersTasksController@store');
Route::patch('/user-task/{id}','UsersTasksController@edit');
Route::delete('/user-task/{id}','UsersTasksController@destroy');

//SkillController
Route::get('/skill','SkillController@index');
Route::patch('/skill/{id}','SkillController@edit');

//UserSkillController pivot
Route::get('/user-skills-stage/{userId}','UserSkillController@index');
Route::patch('/skill-progress/{userId}/{skillId}/{stageId}','UserSkillController@edit');
Route::post('/skill-progress','UserSkillController@store');

//AttendanceStatusController
Route::get('/attendance-status','AttendanceStatusController@index');

//AdditionalKeyController
Route::get('/additional-keys/{cohort}','AdditionalKeyController@index');
Route::post('/additional-keys','AdditionalKeyController@store');
Route::patch('/additional-keys/{id}','AdditionalKeyController@edit');
Route::delete('/additional-keys/{id}','AdditionalKeyController@destroy');

//ClassKeyController
Route::get('/class-keys/{cohort}','ClassKeyController@index');
Route::post('/class-keys','ClassKeyController@store');
Route::patch('/class-keys/{id}','ClassKeyController@edit');
Route::delete('/class-keys/{id}','ClassKeyController@destroy');

//KeysTargetController
Route::get('/target-keys/{cohort}','KeysTargetController@show');
Route::post('/target-keys','KeysTargetController@store');
Route::patch('/target-keys/{id}','KeysTargetController@edit');
Route::delete('/target-keys/{id}','KeysTargetController@destroy');

//TeamController
Route::get('/team/{cohort}','TeamController@show');
Route::post('/team','TeamController@store');
Route::patch('/team/{id}','TeamController@edit');
Route::delete('/team/{id}','TeamController@destroy');

//TeamUserController
Route::post('/team-user','TeamUserController@store');

//getAttendanceKeys UserAttendanceController
Route::get('/attendance-keys/{cohort}','UserAttendanceController@getAttendanceKeys');
//getAssignmentKeys UsersTaskController
Route::get('/task-keys/{cohort}','UsersTasksController@getAssignmentKeys');




Route::group(['prefix' => 'admin', 'middleware' => ['assign.guard:admins','jwt.auth']],function ()
{
  
    
});

Route::group(['prefix' => 'user', 'middleware' => ['assign.guard:api','jwt.auth']],function ()
{
    
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
