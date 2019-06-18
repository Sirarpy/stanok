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

Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home-page');
Route::get('/about', '\App\Http\Controllers\AboutController@index')->name('about-page');
Route::get('/contact', '\App\Http\Controllers\ContactController@index')->name('contact-page');
Route::get('/shop', '\App\Http\Controllers\ShopController@index')->name('shop-page');
Route::get('/product/{id}', '\App\Http\Controllers\ProductController@detail')->name('product-detail');

Auth::routes();


Route::get('/admin', 'AdminController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {

	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::resource('products', 'ProductController', ['except' => ['show']]);

//    Route::resource('categories', 'CategoryController', ['except' => ['show']]);

    Route::get('categories', 'CategoryController@index')->name('categories.index');
    Route::get('categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('categories/store', 'CategoryController@store')->name('categories.store');
    Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
    Route::put('categories/{category}', 'CategoryController@update')->name('categories.update');
    Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy');


});

