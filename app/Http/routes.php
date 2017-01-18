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

Route::get('cart/checkout', 'PostsController@checkout');
Route::get('contact', 'PostsController@contact');
Route::get('cart', 'PostsController@cart');
Route::get('products', 'PostsController@products');

//Route::get('admin/create', 'ItemsController@add_item');
//Route::get('additem','ItemsController@add');
//Route::post('additem','ItemsController@save');
//Route::post('get_parameters','ParametersController@get');

Route::auth();
Route::get('/home', 'HomeController@index');



//Route::resource('admin/items', 'ItemsController');


Route::group(['middleware'=>'admin'], function(){

    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::resource('admin/items', 'AdminItemsController');

    Route::resource('admin/users', 'AdminUsersController');

    Route::get('/admin', function(){ return view('admin/index'); });

});



