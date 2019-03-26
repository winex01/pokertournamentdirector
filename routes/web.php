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

/*Route::get('/', function () {
    return view('home');
});
*/

//Home Routes
Auth::routes();
Route::get('/', 'PagesController@home')->name('Home');
Auth::routes();
Route::get('/aboutus', 'PagesController@aboutus')->name('AboutUs');
Auth::routes();
Route::get('/poker', 'PagesController@poker')->name('Poker');
Auth::routes();
Route::get('/baccarat', 'PagesController@baccarat')->name('Baccarat');
Auth::routes();
Route::get('/minibaccarat', 'PagesController@minibaccarat')->name('Mini Baccarat');
Auth::routes();
Route::get('/events', 'PagesController@events')->name('Events');
Auth::routes();
Route::get('/contact', 'PagesController@contact')->name('Contact');
