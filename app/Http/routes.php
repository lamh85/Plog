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

Route::get('/', 'MiscController@home');

Route::get('/about', 'MiscController@about');

// Other Routes

Route::resource('posts', 'PostsController');

Route::resource('comments', 'CommentsController');

/*
+----------+-------------------+---------------+
| Method   | URI               | Name          |
+----------+-------------------+---------------+
| GET|HEAD | /                 |               |
| GET|HEAD | about             |               |
| GET|HEAD | posts             | posts.index   |
| POST     | posts             | posts.store   |
| GET|HEAD | posts/create      | posts.create  |
| GET|HEAD | posts/new         |               |
| PUT      | posts/{post}      | posts.update  |
| PATCH    | posts/{post}      |               |
| GET|HEAD | posts/{post}      | posts.show    |
| DELETE   | posts/{post}      | posts.destroy |
| GET|HEAD | posts/{post}/edit | posts.edit    |
+----------+-------------------+---------------+
*/