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
Route::get('/home', 'App\Http\Controllers\VideoGameController@list')->name("home.index");
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/add-videogame', 'App\Http\Controllers\VideoGameController@create')->name("admin.videogame.create");
Route::post('/add-videogame', 'App\Http\Controllers\VideoGameController@save')->name("admin.videogame.save");
