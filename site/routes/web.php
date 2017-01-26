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

Route::get('/', 'IndexController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/sendmail', 'IndexController@sendMail');

Route::get('/logout', 'AdminController@authLogout');



Route::group(['middleware' => ['check_auth']], function () {
    Route::get('/admin', 'AdminController@getIndex');

    //Routing News
    Route::get('/admin/news', 'NewsController@getNews');
    Route::get('/admin/news/add', 'NewsController@getAddNew');
    Route::get('/admin/news/edit/{id}', 'NewsController@getEditNew');
        //Routing actions of news (add, edit, delete)
    Route::get('/admin/news/delete/{id}', 'NewsController@deleteNew');
    Route::post('/admin/news/addnew', 'NewsController@addNew');
    Route::post('/admin/news/editnew', 'NewsController@editNew');
    //End of routing news


    //Routing Team
    Route::get('/admin/team', 'TeamController@getTeam');
    Route::get('/admin/team/add', 'TeamController@getAddTeam');
    Route::get('/admin/team/edit/{id}', 'TeamController@getEditTeam');
        //Routing actions of team (add, edit, delete)
    Route::get('/admin/team/delete/{id}', 'TeamController@deleteTeam');
    Route::post('/admin/team/addteam', 'TeamController@addTeam');
    Route::post('/admin/team/editteam', 'TeamController@editTeam');

    //Routing Admins
    Route::get('/admin/admins', 'AdminsController@getAdmins');
    Route::get('/admin/admins/add', 'AdminsController@getAddAdmin');
    Route::get('/admin/admins/edit/{id}', 'AdminsController@getEditAdmin');
    //Routing actions of admins (add, edit, delete)
    Route::get('/admin/admins/delete/{id}', 'AdminsController@deleteAdmin');
    Route::post('/admin/admins/addadmin', 'AdminsController@addAdmin');
    Route::post('/admin/admins/editadmin', 'AdminsController@editAdmin');


    Route::get('/admin/settings', 'SettingsController@getSettings');
    Route::post('/admin/settings/edit', 'SettingsController@editSettings');
});
