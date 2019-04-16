<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table ="khachhang";
    public function sanpham(){
    	return $this ->hasMany('App\sanpham','id','id');
    }

    
    public function hoadon(){
    	return $this->hasMany('App\hoadon','idkhachhang','id');
    }
    public $timestamps = false;
}
