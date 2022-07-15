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

Route::get('/', function () {
    return view('guest.home');
});

Route::post('/ordersummary', 'Api\OrderSubmitController@orderSubmit');


Auth::routes();

Route::get('/register', 'RestaurantCategoryController@index')->name('register');


Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('dishes', 'DishController');
        Route::resource('openingdays', 'OpeningdayController');
        Route::resource('orders', 'OrderController');
        Route::get('charts', 'ChartController@index')->name('charts');
    });

Route::get('{any?}', function () {
    return view('guest.home');
})->where("any", ".*");
