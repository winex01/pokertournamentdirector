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


//Login
Auth::routes();
Route::get('/admin/login', 'Auth\AdminLoginController@ShowLoginForm')->name('admin.login');
Auth::routes();
Route::get('/admin', 'AdminController@index');
Auth::routes();
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin.dashboard'); 

//Logout
Auth::routes();
Route::get('/logout', 'PagesController@logout')->name('logout')->middleware('authenticated');

//Welcome Route
Auth::routes();
Route::get('/', 'PagesController@welcome');

//Tournaments Routes
Auth::routes();
Route::get('/tournament', 'PagesController@tournament')->name('tournament')->middleware('authenticated');

//Daily Tournament Routes
Auth::routes();
Route::get('/dailytournament', 'PagesController@dailytournament')->name('dailytournament')->middleware('authenticated');

//Saturday Tournament Routes
Auth::routes();
Route::get('/saturdaytournament',array('as'=>'saturdaytournament','uses'=>'PagesController@saturdaytournament'));

//Search
Auth::routes();
Route::any('/search', 'PagesController@search')->middleware('authenticated');

//Admin Home Routes
Auth::routes();
Route::get('/adminhome', 'AdminController@adminhome')->name('adminhome')->middleware('authenticated');

 