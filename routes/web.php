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

// 認証用
Auth::routes();

// 商品一覧画面
Route::get('/', 'ItemController@index');

// 商品詳細画面
Route::get('detail/{name}', 'ItemController@detail')->name('detail.show');


