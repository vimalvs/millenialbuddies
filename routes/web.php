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

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');


// Route::resource('/subscribers', 'SubscribersController');


Route::get('/subscribers', 'SubscribersController@index');
Route::post('/subscribers', 'SubscribersController@store');
Route::get('/subscribers/create', 'SubscribersController@create');
Route::get('/subscribers/{subscriber}', 'SubscribersController@show');
Route::patch('/subscribers/{subscriber}', 'SubscribersController@update');
Route::delete('/subscribers/{subscriber}', 'SubscribersController@destroy');
Route::get('/subscribers/{subscriber}/edit', 'SubscribersController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
