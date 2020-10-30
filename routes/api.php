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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/violations', 'API\ViolationsController@store');
Route::post('/register', 'API\CitizensConttoller@store');

Route::post('/login/citizen', 'API\CitizensConttoller@login');
Route::post('/login/police', 'API\PoliceConttoller@login');

Route::get('/notifications/{id}', 'API\NotificationsController@index');
