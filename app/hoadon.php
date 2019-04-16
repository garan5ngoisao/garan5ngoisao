<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table ="donhang";
    public $timestamps = false;
    public function khachhang(){
    	return $this->belongsTo('App\khachhang','idkhachhang','iddh');
    }

}
