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



// 定义首页的路由
Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('signup','UsersController@create')->name('signup');

// 注册
Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

// 登陆
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

// 编辑
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

// 邮件
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
