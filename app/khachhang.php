<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table ="khachhang";
    public function sanpham(){
    	return $this ->hasMany('App\sanpham','masp','id');
    }
    public $timestamps = false;
}
