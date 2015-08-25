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

// Here is the DEFAULT root
// Route::get('/', function () {
//     return view('welcome');
// });

// Routes to Misc Controller

Route::get('/', 'MiscController@home');

Route::get('/about', 'MiscController@about');

// Other Routes

Route::get('/post/new', 'PostsController@myfunction');

Route::resource('post', 'PostsController');
