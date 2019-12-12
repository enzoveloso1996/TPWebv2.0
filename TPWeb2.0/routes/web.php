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
use App\User;
use App\Order;
use App\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('order', function(){
    return view('order');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::resource('order','ProductsController@store')->middleware('auth');

Route::get('mycart', 'OrdersController@cart')->middleware('auth');

Route::get('mycart/{id}', 'OrdersController@destroy')->name('delete');

Route::post('order', 'OrdersController@store')->name('welcome');

Route::get('burgers', 'ProductsController@burgers');
Route::get('burgers/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('chicken', 'ProductsController@chicken');
Route::get('chicken/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('ricemeals', 'ProductsController@ricemeals');
Route::get('ricemeals/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('desserts', 'ProductsController@desserts');
Route::get('desserts/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('bundles', 'ProductsController@bundle');
Route::get('bundle/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('pasta', 'ProductsController@pasta');
Route::get('pasta/{id}', 'ProductsController@show')->name('view-product-detail');

Route::get('breakfasts', 'ProductsController@breakfast');
Route::get('breakfasts/{id}', 'ProductsController@show')->name('view-product-detail');
