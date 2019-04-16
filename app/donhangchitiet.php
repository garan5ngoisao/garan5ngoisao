<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhangchitiet extends Model
{
    protected $table ="donhang_sanpham";
    public $timestamps = false;
    public function donhang(){
    	return $this->belongsTo('App\donhang','iddh','iddh');
    }

}
