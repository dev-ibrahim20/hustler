<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('home_store');
    Route::get('/contact-us', 'ContactController@index')->name('contact');
    Route::post('/contact-us/store', 'ContactController@store')->name('store_contact');
    Route::get('/product', 'ProductController@index')->name('product');
    Route::get('/product/order/{id}', 'ProductController@order')->name('order');
    Route::post('/product/order/checkout', 'ProductController@checkout')->name('checkout');
    Route::post('/product/order/store', 'ProductController@store')->name('store_order');
    Route::get('/product/show', 'ProductController@show')->name('show_order');
    Route::get('/product/order/delete/{id}', 'ProductController@deleteOrder')->name('edit_order');
});

Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    // Users Routes
    Route::get('/home/users', 'HomeController@users')->name('users');
    Route::get('/home/users/add', 'HomeController@addUsers')->name('Addusers');
    Route::post('/home/users/store', 'HomeController@store')->name('store');
    Route::get('/home/users/edit/{id}', 'HomeController@edit')->name('edit');
    Route::post('/home/users/update/{id}', 'HomeController@update')->name('update');
    Route::get('/home/users/delete/{id}', 'HomeController@delete')->name('delete');

    // Contact Route
    Route::get('/home/contact', 'HomeController@contact')->name('contact_admin');

    // product Route
    Route::get('/home/product',         'ProductController@index')->name('product_admin');
    Route::get('/home/product/add',     'ProductController@addProduct')->name('Addproduct');
    Route::post('/home/product/store',  'ProductController@store')->name('store_product');
    Route::get('/home/product/edit/{id}',    'ProductController@editProduct')->name('edit_product');
    Route::post('/home/product/update/{id}',    'ProductController@updateProduct')->name('update_product');
    Route::get('/home/product/delete/{id}',    'ProductController@deleteProduct')->name('delete_product');
    Route::get('/home/product/order',    'ProductController@order_dash')->name('order_dash');
    Route::get('/home/product/order/delete/{id}',    'ProductController@Delete_order')->name('delete_order');
});
