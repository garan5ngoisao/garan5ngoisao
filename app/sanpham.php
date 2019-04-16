<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table ="sanpham";
    public function danhmuc(){
    	return $this ->belongsTo('App\danhmuc','id_danhmuc','masp');
    }
    public $timestamps = false;
}
