<?php

namespace App\Http\Controllers;
use App\sanpham;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$sanpham =sanpham::where('id_danhmuc',1)->get();
        $giaikhat =sanpham::where('id_danhmuc',2)->get();
    	return view('page.trangchu',compact('sanpham','giaikhat'));
    }
    public function getgaran(){
        $garan=sanpham::where('id_danhmuc',1)->get();
    	return view('page.loaisanpham1',compact('garan'));
    }
    public function getgiaikhat(){
        $giaikhat =sanpham::where('id_danhmuc',2)->get();
    	return view('page.loaisanpham2',compact('giaikhat'));
    }
    public function getlienhe(){
    	return view('page.lienhe');
    }
    public function getchitietsanpham(Request $req){
        $sanphamt =sanpham::where('masp',$req->masp)->first();
    	return view('page.chitiet',compact('sanphamt'));
    }
    public function getlogin(){
        return view('page.dangnhap');
    }
}
