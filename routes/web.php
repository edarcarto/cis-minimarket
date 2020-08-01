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

Route::get('/', 'PageController@index')->name('home');
Route::get('/filter', 'PageController@filter')->name('filter');
Route::get('/product/{id}', 'PageController@viewProduct')->name('product');
Route::get('/add-to-cart', 'PageController@addToCart')->name('addToCart');
Route::get('/cart', 'PageController@cart')->name('cart');
Route::delete('/product/{id}/delete', 'PageController@deleteProduct')->name('delCart');
Route::post('update-cart','PageController@updateCart')->name('updateCart');
Route::post('/payme','PageController@pagarCarrito')->name('payme');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categories', 'CategoryController');
Route::resource('users', 'UserController');
Route::resource('trademarks', 'TrademarkController');

Route::resource('suppliers', 'SupplierController');

Route::resource('products', 'ProductController');

Route::resource('customers', 'CustomerController');

Route::resource('orders', 'OrderController');

Route::resource('shippers', 'ShipperController');

Route::resource('userTypes', 'UserTypeController');

Route::resource('markets', 'MarketController');

Route::resource('wishlists', 'WishlistController');

Route::get('/my-orders', 'MeController@index')->name('my-orders');
Route::get('/add-wishlist/{id}', 'PageController@addWish')->name('add-wishlist');