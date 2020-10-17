<?php

use Illuminate\Support\Facades\Route;

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


Route::middleware('auth')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admins', 'Dashboard\UserController@index')->name('admins.index');
    Route::get('/admins/create', 'Dashboard\UserController@create')->name('admins.create');
    Route::post('/admins', 'Dashboard\UserController@store')->name('admins.store');
    Route::get('/admins/{user}/edit', 'Dashboard\UserController@edit')->name('admins.edit');
    Route::put('/admins/{user}', 'Dashboard\UserController@update')->name('admins.update');

});
