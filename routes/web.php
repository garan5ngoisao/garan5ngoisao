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
//danh muc
  

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