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
    // return view('welcome');
    return view('task/dashboard');
});
Route::get('getusers', 'UserController@getUsers');
Route::resource('tasks','TaskController');
Route::resource('users','UserController');
//test
Route::get('getrandomuser', 'UserController@getRandomUser');