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
Route::get('delete/{id}', 'HomeController@deleteUser');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
