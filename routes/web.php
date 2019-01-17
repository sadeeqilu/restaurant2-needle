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

Route::get('/restaurants', [
    'uses' => 'RestaurantsController@showRestaurants',
    'as' => 'showRestaurants'
]);

Route::get('/foods', [
    'uses' => 'RestaurantsController@showFoods',
    'as' => 'showFoods'
]);

Route::get('/drinks', [
  'uses' => 'RestaurantsController@showDrinks',
  'as' => 'showDrinks'
]);

Route::get('/about', [
  'uses' => 'RestaurantsController@showAbout',
  'as' => 'showAbout'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
