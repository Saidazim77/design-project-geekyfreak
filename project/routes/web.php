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
Route::get('/news', 'PagesController@news'); 
Route::get('/comics', 'PagesController@comics'); 
Route::get('/manga', 'PagesController@manga'); 
Route::get('/movies', 'PagesController@movies'); 
Route::get('/contacts','PagesController@contacts');

// Route::view('/', 'news');
// Route::view('/', 'comics');
// Route::view('/', 'manga');
// Route::view('/', 'movies');
// Route::view('/', 'contacts');