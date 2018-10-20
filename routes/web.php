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

Route::get('/', 'HomeController@index')->name('home');


// Auth::routes();

Route::resource('category','sys\CategoryController');


Route::resource('tag','sys\TagController');

Route::resource('author','sys\AuthorController');

Route::resource('post','sys\PostController');

Route::post('post/{slug}/addcomment', 'sys\CommentController@store')->name('addcomment');

