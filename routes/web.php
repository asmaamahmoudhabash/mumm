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

Auth::routes();

// fornt-end routs
Route::get('/', 'FrontController@index');
Route::get('post/{id}', 'FrontController@post');
Route::get('category/{id}', 'FrontController@category');

Route::group(['prefix' => 'Dashboard','middleware' => 'auth'],function(){

    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');



});