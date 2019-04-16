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



Route::get('/',[
	'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('ga-ran',[
	'as'=>'ga-ran',
	'uses'=>'PageController@getgaran'
]);
Route::get('giai-khat',[
	'as'=>'giai-khat',
	'uses'=>'PageController@getgiaikhat'
]);
Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getlienhe'
]);
Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getchitietsanpham'
]);


Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);
Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);
Route::get('tang-so-luong/{id}',[
	'as'=>'tangsoluong',
	'uses'=>'PageController@gettang'
]);
Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);
Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);
