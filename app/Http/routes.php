<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

// Route::get('/', function () {
// 	return view('pages/welcome');
// });

Route::get('/about', 'PageController@getAbout');
Route::get('/contact', 'PageController@getContact');
Route::get('/', 'PageController@getIndex');
Route::get('/{post}', 'PageController@getSingle')->name('pages.single');
Route::resource('posts', 'PostController');
