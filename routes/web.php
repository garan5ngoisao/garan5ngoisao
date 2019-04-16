<?php
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'sanpham'],function(){
 
        Route::get('danhsach',[
            'as'=>'list',
            'uses'=>'PageController@getDanhsach'
        ]);
        Route::get('sua/{id}', [
            'as'=>'edit',
            'uses'=>'PageController@getSuaSP'
        ]);
        Route::post('sua/{id}', [
            'as'=>'edit',
            'uses'=>'PageController@postSuaSP'
        ]);
        Route::get('them', [
            'as'=>'add',
            'uses'=>'PageController@getThem'
        ]);
        Route::post('them', [
            'as'=>'add',
            'uses'=>'PageController@postThem'
        ]);
        Route::get('xoa/{id}', [
            'as'=>'delete',
            'uses'=>'PageController@getXoaSP'
        ]);
    });
    Route::group(['prefix'=>'tendanhmuc'],function(){
        Route::get('danhsach', [
            'as'=>'listtype',
            'uses'=>'PageController@getDanhsachtype'
        ]);
        Route::get('sua/{id}', [
            'as'=>'edittype',
            'uses'=>'PageController@getSualoai'
        ]);
        Route::post('sua/{id}', [
            'as'=>'edittype',
            'uses'=>'PageController@postSualoai'
        ]);
        Route::get('them', [
            'as'=>'addtype',
            'uses'=>'PageController@getThemloai'
        ]);
        Route::post('them', [
            'as'=>'addtype',
            'uses'=>'PageController@postThemloai'
        ]);
        Route::get('xoa/{id}', [
            'as'=>'deleteloai',
            'uses'=>'PageController@getXoaloai'
        ]);
    });

});


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
Route::get('chi-tiet-san-pham/{masp}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getchitietsanpham'
]);