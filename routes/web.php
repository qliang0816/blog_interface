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

Route::get('/', 'IndexController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/media', 'MediaController@index');

Route::get('/timeline', 'TimelineController@index');

Route::group(['prefix' => 'bk'], function () {
    Voyager::routes();
});
