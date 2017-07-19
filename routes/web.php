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

Route::get('/','BlogController@home');
Route::get('/{slug}/show','BlogController@show');
Route::get('users/register','Auth\RegisterController@showRegistrationForm');
Route::post('users/register','Auth\RegisterController@register');
Route::get('users/logout','Auth\LoginController@logout');
Route::get('users/login','Auth\LoginController@showLoginForm');
Route::post('users/login','Auth\LoginController@login');
/**
 *
 * By using Route::group we can group all related routes together
 * 
 *
*/ 
Route::group(array('prefix'=>'admin','namespace'=>'Admin','middleware'=>'manager'),function(){
	Route::get('/','PagesController@index');
	Route::get('users','UsersController@index');
	Route::get('users/{id}/edit','UsersController@edit');
	Route::post('users/{id}/edit','UsersController@update');
	Route::get('roles','RolesController@index');
	Route::get('roles/create','RolesController@create');
	Route::post('roles/create','RolesController@store');
	Route::get('posts','PostsController@index');
	Route::get('posts/create','PostsController@create');
	Route::post('posts/create','PostsController@store');
	Route::get('posts/{id}/edit','PostsController@edit');
	Route::post('posts/{id}/edit','PostsController@update');
	Route::get('posts/{id}/show','PostsController@show');
	Route::post('posts/{id}/delete','PostsController@destroy');
	Route::get('categories','CategoriesController@index');
	Route::get('categories/create','CategoriesController@create');
	Route::post('categories/create','CategoriesController@store');
	Route::post('categories/{id}/delete','CategoriesController@destroy');
});