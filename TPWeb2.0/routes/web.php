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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('burgers', 'ProductsController@burgers');
Route::get('burgers/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('chickens', 'ProductsController@chickens');
Route::get('chickens/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('ricemeals', 'ProductsController@ricemeals');
Route::get('ricemeals/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('desserts', 'ProductsController@desserts');
Route::get('desserts/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('bundle', 'ProductsController@bundle');
Route::get('bundle/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('pasta', 'ProductsController@pasta');
Route::get('pasta/{id}', 'ProductController@show')->name('view-product-detail');

Route::get('breakfasts', 'ProductsController@breakfast');
Route::get('breakfasts/{id}', 'ProductController@show')->name('view-product-detail');
