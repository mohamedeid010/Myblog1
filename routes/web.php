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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts','PagesController@posts');
Route::get('/posts/{id}','PagesController@post')->name('post');
Route::post('/post/store','PagesController@store')->name('post/store');
Route::post('/posts/{post}/store','CommentsController@store')->name('post/comment');