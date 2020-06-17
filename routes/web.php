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
Route::get('/category/{id}/{name}','CategoryController@showposts')->name('category/posts');

Route::get('/register','RegisterController@create')->name('register');
Route::post('/register','RegisterController@store')->name('register');
Route::get('/login','LoginController@create');
Route::post('/login','LoginController@store')->name('login');
Route::get('/logout','LoginController@destroy');
Route::post('/like','PagesController@like')->name('like');
Route::post('/dislike','PagesController@dislike')->name('dislike');

Route::group(['middleware' => 'roles' , 'roles' =>['user']], function(){
    
    Route::get('/admin',[
        'uses' => 'PagesController@admin',
        'as' => 'content.admin',
    ]);
    Route::post('/addrole','PagesController@addrole')->name('addrole');

});
