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

Route::get('/', 'App\Http\Controllers\VideoGameController@list')->name("home.index");
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('videoGame', 'App\Http\Controllers\Admin\VideoGameController@save')->name("videogame.save");
