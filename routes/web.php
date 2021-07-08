<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Guest
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('detail/{id}', 'WelcomeController@show')->name('detail');
Route::get('product', 'WelcomeController@create')->name('product');

// Auth Login
Auth::routes();

// Customer
Route::get('/home', 'HomeController@index')->name('home');
Route::get('order/{id}', 'OrderController@index');
Route::post('order/{id}', 'OrderController@update');
Route::get('rent', 'OrderController@create');
Route::delete('rent/{id}', 'OrderController@destroy');
Route::get('rent/confirm', 'OrderController@store');
Route::get('garage', 'GarageController@index');
Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');
Route::get('car', 'CarController@index');
Route::get('history', 'ProfileController@create');
Route::get('history/detail/{id}', 'ProfileController@show');
