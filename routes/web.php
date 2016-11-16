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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@getIndex');
Route::get('danh-muc/{id}', ['as' => 'danhmuc', 'uses' => 'HomeController@getArticles']);
Route::get('bai-viet/{id}', ['as' => 'view', 'uses' => 'HomeController@getView']);
Route::get('gioi-thieu', ['as' => 'contact', 'uses' => 'HomeController@getContact']);
Route::get('tim-kiem', ['as' => 'search', 'uses' => 'HomeController@getSearchHome']);

Route::get('category/{$id}', 'HomeController@getCategory');