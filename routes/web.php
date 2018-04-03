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





// 首页文章分页
Route::get('/home', "HomeController@home");

// 文章标题分类
Route::get('/category', "CategoryController@category");

// 标签分类
Route::get('/tagcate', "CategoryController@tagCate");

// 文章标题分类
Route::get('/titlecate', "CategoryController@titleCate");

// 图片分类
Route::get('/imagecate', "CategoryController@imageCate");

// 文章内容和前后两篇文章
Route::get('/article', 'ArticleController@index');

// 时间线
Route::get('/timeline', 'TimelineController@index');

// 图片
Route::get('/media', 'MediaController@index');


Route::group(['prefix' => 'bk'], function () {
    Voyager::routes();
});
