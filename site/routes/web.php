<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', 'AdminController@authLogout');



Route::group(['middleware' => ['check_auth']], function () {
    Route::get('/admin', 'AdminController@getIndex');
    Route::get('/admin/news', 'AdminController@getNews');
    Route::get('/admin/news/add', 'AdminController@getAddNew');
    Route::get('/admin/news/delete/{id}', 'AdminController@deleteNew');
    Route::get('/admin/news/addnew', 'AdminController@addNew');
    Route::get('/admin/news/edit/{id}', 'AdminController@getEditNew');
    Route::get('/admin/news/editnew', 'AdminController@editNew');
});
