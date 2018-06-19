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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('login', 'AdminController@index');
    Route::post('login', 'AdminController@login');
});



// Adminer
Route::any('adminer', '\Miroc\LaravelAdminer\AdminerAutologinController@index');
