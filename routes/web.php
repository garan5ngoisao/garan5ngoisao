<?php
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'sanpham'],function(){
 
        Route::get('danhsach',[
            'as'=>'list',
            'uses'=>'PageController@getDanhsach'
        ]);
        Route::get('sua/{masp}', [
            'as'=>'edit',
            'uses'=>'PageController@getSua'
        ]);
        Route::post('sua/{masp}', [
            'as'=>'edit',
            'uses'=>'PageController@postSua'
        ]);
        Route::get('them', [
            'as'=>'add',
            'uses'=>'PageController@getThem'
        ]);
        Route::post('them', [
            'as'=>'add',
            'uses'=>'PageController@postThem'
        ]);
        Route::get('xoa/{masp}', [
            'as'=>'delete',
            'uses'=>'PageController@getXoaSP'
        ]);
    });
    Route::group(['prefix'=>'khachhang'],function(){
        Route::get('danhsach', [
            'as'=>'listkh',
            'uses'=>'PageController@getDanhsachkh'
        ]);
        Route::get('sua/{id}', [
            'as'=>'editkh',
            'uses'=>'PageController@getSuakh'
        ]);
        Route::post('sua/{id}', [
            'as'=>'edittype',
            'uses'=>'PageController@postSuakh'
        ]);
        Route::get('them', [
            'as'=>'addkh',
            'uses'=>'PageController@getThemkh'
        ]);
        Route::post('them', [
            'as'=>'addkh',
            'uses'=>'PageController@postThemkh'
        ]);
        Route::get('xoa/{id}', [
            'as'=>'deletekh',
            'uses'=>'PageController@getXoakh'
        ]);
    });

});
<<<<<<< HEAD

Route::group(['prefix'=>'khachhang'],function(){
        Route::get('danhsach', [
            'as'=>'listkh',
            'uses'=>'PageController@getDanhsachkh'
        ]);
        Route::get('sua/{id}', [
            'as'=>'editkh',
            'uses'=>'PageController@getSuakh'
        ]);
        Route::post('sua/{id}', [
            'as'=>'edittype',
            'uses'=>'PageController@postSuakh'
        ]);
        Route::get('them', [
            'as'=>'addkh',
            'uses'=>'PageController@getThemkh'
        ]);
        Route::post('them', [
            'as'=>'addkh',
            'uses'=>'PageController@postThemkh'
        ]);
        Route::get('xoa/{id}', [
            'as'=>'deletekh',
            'uses'=>'PageController@getXoakh'
        ]);
    });
=======
//danh muc
  

>>>>>>> quanlykhachhang
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
<<<<<<< HEAD
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
Route::get('giam-so-luong/{id}',[
    'as'=>'giamsoluong',
    'uses'=>'PageController@getgiam'
]);
Route::get('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@getCheckout'
]);
Route::post('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@postCheckout'
]);
Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@getlogin'
]);
Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@postLogin'
]);

Route::get('dang-ky',[
    'as'=>'signin',
    'uses'=>'PageController@getSignin'
]);
Route::post('dang-ky',[
    'as'=>'signin',
    'uses'=>'PageController@postSignin'
]);
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);
Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PageController@getLogout'
]);
=======
Route::get('chi-tiet-san-pham/{masp}',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getchitietsanpham'
]);
>>>>>>> quanlykhachhang
