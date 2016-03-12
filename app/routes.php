<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', ['as'=>'home','uses' => 'PageController@index']);
Route::get('details/{id?}', ['as'=>'show','uses' => 'PageController@show']);
Route::get('posts', ['as'=>'posts','uses' => 'PostController@posts']);
Route::get('search/category/{category_id}/{sub_category_id}', ['as'=>'search.category','uses' => 'PostController@searchCategory']);
Route::get('search/keyword/{keyword}', ['as'=>'search.keyword','uses' => 'PostController@searchKeyword']);



Route::group(['before' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'AuthController@login']);

	

	Route::post('login', array('uses' => 'AuthController@doLogin'));
});

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'AuthController@doChangePassword'));

	Route::get('subcategory/{id}', array('as' => 'subcategory', 'uses' => 'CategoryController@getSubCategory'));
	

	Route::get('posts',['as'=>'post.index', 'uses'=>'PostController@index']);
	Route::get('post/create',['as'=>'post.create', 'uses'=>'PostController@create']);
	Route::post('post/store',['as'=>'post.store', 'uses'=>'PostController@store']);
	Route::get('post/edit/{id}',['as'=>'post.edit', 'uses'=>'PostController@edit']);
	Route::put('post/update/{id}',['as'=>'post.update', 'uses'=>'PostController@update']);
	Route::delete('post/delete/{id}',['as'=>'post.delete', 'uses'=>'PostController@destroy']);
	// Route::get('cart/checkout/{id}',['as'=>'cart.checkout', 'uses'=>'CartsController@checkout']);
	
});