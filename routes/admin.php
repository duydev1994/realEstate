<?php
/**
 *Author Duy Tran
 * Article Route\
 * @email <DUY TRAN duydev@hotmail.com>
 * */


Route::group(['as' => 'categories.', 'prefix' => 'categories'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'CategoriesController@getIndex']);
    Route::post('/', ['as' => 'ajax.treeview', 'uses' => 'CategoriesController@getTreeView']);
    Route::post('create', ['as' => 'create', 'uses' => 'CategoriesController@postCreate']);
    Route::get('create', ['as' => 'create', 'uses' => 'CategoriesController@getCreate']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CategoriesController@getEdit']);
    Route::post('edit/{id}', ['as' => 'edit', 'uses' => 'CategoriesController@postEdit']);
    Route::get('{id}/articles', ['as' => 'articles', 'uses' => 'CategoriesController@getArticles']);
    Route::get('datatables', ['as' => 'datatables', 'uses' => 'CategoriesController@getDatatables']);
});


Route::group(['as' => 'articles.', 'prefix' => 'articles'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'ArticlesController@getIndex']);
    Route::get('create', ['as' => 'create', 'uses' => 'ArticlesController@getViewCreate']);
    Route::post('create', ['as' => 'create', 'uses' => 'ArticlesController@postCreate']);
    Route::post('datatables', ['as' => 'datatables', 'uses' => 'ArticlesController@getDatatables']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'ArticlesController@getViewEdit']);
    Route::post('edit/{id}', ['as' => 'edit', 'uses' => 'ArticlesController@postEdit']);
    Route::post('delete', ['as' => 'delete', 'uses' => 'ArticlesController@postDelete']);
    Route::post('detail', ['as' => 'detail', 'uses' => 'ArticlesController@postDetail']);
    Route::post('upload', ['as' => 'upload', 'uses' => 'ArticlesController@postUpload']);
    Route::get('locations', ['as' => 'locations', 'uses' => 'ArticlesController@getLocations']);
});
