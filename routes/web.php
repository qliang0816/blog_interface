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

Route::get('/media', function () {
    return view('media');
});

Route::get('/timeline', function () {
    return view('timeline');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
