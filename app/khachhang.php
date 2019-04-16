<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table ="khachhang";
    public function sanpham(){
<<<<<<< HEAD
    	return $this ->hasMany('App\sanpham','id','id');
    }

    
    public function hoadon(){
    	return $this->hasMany('App\hoadon','idkhachhang','id');
=======
    	return $this ->hasMany('App\sanpham','masp','id');
>>>>>>> quanlykhachhang
    }
    public $timestamps = false;
}
