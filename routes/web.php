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

Route::get('test', function() {
   return view('admin.listing.modules');
});

Route::get('test2', function() {
   return view('detail');
});
Route::get('/', 'HomeController@index')->name('home');

//////Côté admin//////

Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function() {

    Route::get('AllLocal', 'LocalController@index');

    //home
    Route::get('/', 'HomeController@admin')->name('home');

    //Users
    Route::get('users', 'UserController@getUsers')->name('admin_users');
    Route::get('user/{id}', 'UserController@getOneUser')->name('admin_user');

    //Levels
    Route::get('levels', 'LevelController@getAllLevels')->name('admin_levels');

    //Modules
    Route::get('modules', 'ModuleController@getAllModules')->name('admin_modules');
    Route::get('module/{id}', 'ModuleController@getOneModule')->name('admin_module');

    //Locals
    Route::get('locals', 'LocalController@getAllLocals')->name('admin_locals');
    Route::get('local/{id}', 'LocalController@getOneLocal')->name('admin_local');

    //Historique

    //Adminer
    Route::any('adminer', '\Miroc\LaravelAdminer\AdminerAutologinController@index');
});

////// Côté Utilisateur //////
//Users
Route::get('user', 'UserController@getUser')->name('user')->middleware('auth');
Route::post('update', 'UserController@updateUser')->name('update');

//Modules
Route::get('modules', 'ModuleController@getAllModules')->name('modules');
Route::get('module/{id}', 'ModuleController@getOneModule')->name('module');

//Locals
Route::get('locations', 'LocalController@getAllLocals')->name('locals');
Route::get('local/{local}', 'LocalController@getOneLocal')->name('local');

//Contact

//Route::get('', '')->name('');

//Louer

//Historique

//Panier
