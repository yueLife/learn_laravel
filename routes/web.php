<?php

use Illuminate\Support\Facades\Route;

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

# 一般路由
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

# 微博
Route::namespace('Weibo')->prefix('/weibo')->name('weibo.')->group(function () {
    Route::get('/', 'WeiboController@home')->name('home');
});


# 用户
Route::get('/register','UsersController@create')->name('register');
Route::resource('users','UsersController');
