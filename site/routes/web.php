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

    //Routing News
    Route::get('/admin/news', 'AdminController@getNews');
    Route::get('/admin/news/add', 'AdminController@getAddNew');
    Route::get('/admin/news/edit/{id}', 'AdminController@getEditNew');
        //Routing actions of news (add, edit, delete)
    Route::get('/admin/news/delete/{id}', 'AdminController@deleteNew');
    Route::post('/admin/news/addnew', 'AdminController@addNew');
    Route::get('/admin/news/editnew', 'AdminController@editNew');
    //End of routing news


    //Routing Team
    Route::get('/admin/team', 'AdminController@getTeam');
    Route::get('/admin/team/add', 'AdminController@getAddTeam');
    Route::get('/admin/team/edit/{id}', 'AdminController@getEditTeam');
        //Routing actions of team (add, edit, delete)
    Route::get('/admin/team/delete/{id}', 'AdminController@deleteTeam');
    Route::get('/admin/team/addnew', 'AdminController@addTeam');
    Route::get('/admin/team/editnew', 'AdminController@editTeam');

});
