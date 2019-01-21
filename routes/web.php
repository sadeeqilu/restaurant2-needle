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
    'uses' => 'mainPageController@showMainPage',
    'as' => 'showMainPage'
]);

Route::get('/foods', [
    'uses' => 'mainPageController@showFoods',
    'as' => 'showFoods'
]);

Route::get('/drinks', [
  'uses' => 'mainPageController@showDrinks',
  'as' => 'showDrinks'
]);

Route::get('/about', [
  'uses' => 'mainPageController@showAbout',
  'as' => 'showAbout'
]);

Route::get('/show', [
  'uses' => 'RestaurantController@show',
  'as' => 'show'
]);

Route::post('/saveNewRestaurant', [
  'uses' => 'RestaurantController@saveNewRestaurant',
  'as' => 'saveNewRestaurant'
]);

Route::get('/showRestaurateur', [
  'uses' => 'RestaurateurController@showRestaurateur',
  'as' => 'showRestaurateur'
]);

Route::post('/saveNewRestaurateur', [
  'uses' => 'RestaurateurController@saveNewRestaurateur',
  'as' => 'saveNewRestaurateur'
]);

Route::resource('Item', 'ItemController');

Route::resource('Restaurant', 'RestaurantsController');

Route::resource('Restaurateur', 'RestaurateurController');

Route::resource('Order', 'OrderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
