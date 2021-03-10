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
Route::post('/admin/register', 'AdminAuthController@register');
Route::post('/admin/login', 'AdminAuthController@login');
Route::post('/admin/logout', 'AdminAuthController@logout');

Route::group(['prefix' => 'admin', 'middleware' => ['assign.guard:admins','jwt.auth']],function ()
{
    Route::get('/demo','AdminController@demo');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
