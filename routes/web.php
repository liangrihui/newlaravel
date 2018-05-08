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

Route::get('/', function () {
    return view('welcome');
});
Route::get('article/index','ArticleController@index');
Route::any('article/create','ArticleController@create');
Route::any('article/save','ArticleController@save');


Auth::routes();//定义了登录注册及找回密码路由

Route::get('/home', 'HomeController@index')->name('home');
