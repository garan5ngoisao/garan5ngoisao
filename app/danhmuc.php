<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $table ="tendanhmuc";
    public function sanpham(){
    	return $this - >hasMany('App\sanpham','id_danhmuc','id_danhmuc');
    }
}
