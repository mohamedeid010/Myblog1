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

Route::get('/','HomeController@index');
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
Route::get('/statistic','PagesController@statistic');

Route::group(['middleware' => 'roles' , 'roles' =>['user','admin']], function(){
    Route::get('/post/create','PagesController@create')->name('post/create');
    
    

});
Route::group(['prefix' => 'admin' , 'middleware' => 'roles' , 'roles' =>['admin']], function () {
    Route::get('/index','Admin\MainController@index');
    Route::get('/article','Admin\ArticleController@index')->name('article');
    Route::get('/article/edit/{id}','Admin\ArticleController@update')->name('article/edit');
    Route::post('/article/save/{id}','Admin\ArticleController@save')->name('article/save');
    Route::get('/article/delete/{id}','Admin\ArticleController@destroy')->name('article/delete');
    Route::get('/article/status/{id}','Admin\ArticleController@change_status')->name('article/status');

    Route::get('/admin',[
        'uses' => 'PagesController@admin',
        'as' => 'content.admin',
    ]);
    Route::post('/addrole','PagesController@addrole')->name('addrole');
});