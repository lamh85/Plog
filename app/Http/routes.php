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

Route::resource('post', 'PostsController');

// Route::get('/post/new', 'PostsController@myfunction');

/*
+----------+------------------+--------------+
| Method   | URI              | Name         |
+----------+------------------+--------------+
| GET|HEAD | /                |              |
| GET|HEAD | about            |              |
| GET|HEAD | post             | post.index   |
| POST     | post             | post.store   |
| GET|HEAD | post/create      | post.create  |
| GET|HEAD | post/new         |              |
| PUT      | post/{post}      | post.update  |
| PATCH    | post/{post}      |              |
| GET|HEAD | post/{post}      | post.show    |
| DELETE   | post/{post}      | post.destroy |
| GET|HEAD | post/{post}/edit | post.edit    |
+----------+------------------+--------------+

*/