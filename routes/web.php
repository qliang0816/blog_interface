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

// 首页文章分页
Route::get('/home/paginate/{paginate}', "HomeController@home");
// 文章标题分类
Route::get('/category', "CategoryController@category");
// 标签分类
Route::get('/tagcate', "CategoryController@tagCate");
// 图片分类
Route::get('/imagecate', "CategoryController@imageCate");

Route::group(['prefix' => 'bk'], function () {
    Voyager::routes();
});
