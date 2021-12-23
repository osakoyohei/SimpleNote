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

Auth::routes();

Route::get('/login/guest', 'Auth\LoginController@guestLogin')->name('login.guest');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/create', 'HomeController@create')->name('create');
    Route::post('/store', 'HomeController@store')->name('store');
    Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
    Route::post('/update/{id}', 'HomeController@update')->name('update');
    Route::post('/delete/{id}', 'HomeController@delete')->name('delete');
});