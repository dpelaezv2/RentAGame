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
Route::get('/', 'App\Http\Controllers\HomeController@list')->name("home.index");
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/add-videogame', 'App\Http\Controllers\VideoGameController@create')->name("admin.videogame.create");
Route::get('/videogames-list', 'App\Http\Controllers\VideoGameController@list')->name("admin.videogame.list");
Route::get('/users-list', 'App\Http\Controllers\Admin\AdminUserController@list')->name("admin.user.list");
Route::get('/user-create', 'App\Http\Controllers\Admin\AdminUserController@create')->name("admin.user.create");
Route::Post('/user-delete', 'App\Http\Controllers\Admin\AdminUserController@delete')->name("admin.user.delete");
Route::Post('/user-save', 'App\Http\Controllers\Admin\AdminUserController@save')->name("admin.user.save");
Route::post('/add-videogame', 'App\Http\Controllers\VideoGameController@save')->name("admin.videogame.save");

