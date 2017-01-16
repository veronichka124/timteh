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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostsController');
//Route::get('contact', 'PostsController@contact');
//Route::get('/my_html', 'PostsController@my_html');
Route::get('posts', 'PostsController@show_post');

Route::get('additem','ItemsController@add');
Route::post('additem','ItemsController@save');
Route::post('get_parameters','ParametersController@get');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('admin/users', 'AdminUsersController');