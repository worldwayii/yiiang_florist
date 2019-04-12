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

Route::get('/', 'HomeController@index');
Route::get('registered', 'Auth\RegisterController@registered');
Route::get('dashboard', 'HomeController@showDashboard');
Route::get('edit/{id}', 'HomeController@editUser');
Route::post('updateUser', 'HomeController@userUpdate');
Route::get('delete/{id}', 'HomeController@deleteUser');

Route::get('order', 'HomeController@order')->middleware('auth');;

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
