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
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/add-videogame', 'App\Http\Controllers\Admin\AdminVideoGameController@create')->name("admin.videogame.create");
Route::get('/videogames-list', 'App\Http\Controllers\VideoGameController@list')->name("videogame.list");
Route::get('/videogames-filter-price', 'App\Http\Controllers\VideoGameController@filterPrice')->name("videogame.filterPrice");
Route::get('/videogames-filter-category', 'App\Http\Controllers\VideoGameController@filterCategory')->name("videogame.filterCategory");
Route::get('/admin-videogames-list', 'App\Http\Controllers\Admin\AdminVideoGameController@adminList')->name("admin.videogame.list");
Route::Post('/admin-videogames-delete', 'App\Http\Controllers\Admin\AdminVideoGameController@delete')->name("admin.videogame.delete");
Route::get('/users-list', 'App\Http\Controllers\Admin\AdminUserController@list')->name("admin.user.list");
Route::get('/user-create', 'App\Http\Controllers\Admin\AdminUserController@create')->name("admin.user.create");
Route::Post('/user-delete', 'App\Http\Controllers\Admin\AdminUserController@delete')->name("admin.user.delete");
Route::Post('/user-save', 'App\Http\Controllers\Admin\AdminUserController@save')->name("admin.user.save");
Route::Post('/add-videogame', 'App\Http\Controllers\Admin\AdminVideoGameController@save')->name("admin.videogame.save");
Route::get('/cart-delete', 'App\Http\Controllers\CartController@delete')->name("user.cart.delete");
Route::get('/cart-show', 'App\Http\Controllers\CartController@showCart')->name("user.cart.show");
Route::get('/order-buy', 'App\Http\Controllers\OrderController@buy')->name("user.buy");
Route::get('/create-review/{id}', 'App\Http\Controllers\ReviewController@form')->name("review.crear");
Route::get('/list-review/{id}', 'App\Http\Controllers\ReviewController@list')->name("review.list");
Route::post('/add-review', 'App\Http\Controllers\ReviewController@add')->name("review.add");
Route::get('/videogame/add-cart/{id}/{forRent}', 'App\Http\Controllers\ItemController@add')->name("videoGame.add.cart");
Route::get('/wishlist-show', 'App\Http\Controllers\WishlistController@show')->name("user.wishlist.show");
Route::Post('/wishlist-add', 'App\Http\Controllers\WishlistController@add')->name("user.wishlist.add");

