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

/*Black Jack*/
Auth::routes();
Route::get('/blackjack', 'PagesController@blackjack')->name('Black Jack');

/*Baccarat*/
Auth::routes();
Route::get('/baccarat', 'PagesController@baccarat')->name('Baccarat');

/*Baccarat Super 6*/
Auth::routes();
Route::get('/super6', 'PagesController@super6')->name('Super 6');

/*Texas Hold 'em*/
Auth::routes();
Route::get('/texasholdem', 'PagesController@texasholdem')->name('Texas Hold em');


Auth::routes();
Route::get('/events', 'PagesController@events')->name('Events');
Auth::routes();
Route::get('/contact', 'PagesController@contact')->name('Contact');

/*Data Capturing*/
Auth::routes();
Route::get('/sendemail', 'SendEmailController@sendemail')->name('Contact');

