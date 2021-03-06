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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users');
Route::post('/users/create', 'UserController@create')->name('users.create');
Route::put('/users/{user}/update', 'UserController@update')->name('users.update');
Route::delete('/users/{user}/destroy', 'UserController@destroy')->name('users.destroy');
