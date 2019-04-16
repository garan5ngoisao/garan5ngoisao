<?php

namespace App\Http\Controllers;
use App\sanpham;
use App\Cart;
use App\khachhang;
use App\hoadon;
use App\donhangchitiet;
use Session;

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
        $sanphamt =sanpham::where('id',$req->id)->first();
    	return view('page.chitiet',compact('sanphamt'));
    }
    
    
    public function getAddtoCart(Request $req,$id)
    {
        $product =sanpham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart =new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getDelItemCart($id){
        $oldCart =Session::has('cart')?Session::get('cart'):null;
        $cart =new Cart($oldCart);
        $cart->removeItem($id);
        
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function gettang(Request $req,$id)
    {
        $product =sanpham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart =new Cart($oldCart);
        $cart->tang($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getCheckout(Request $req){
        return view('page.dathang');
    }
    public function postCheckout(Request $req){
        $cart =Session::get('cart');
        
        $customer =new khachhang;
        $customer ->tenkh =$req ->hoten;
        $customer ->email=$req->email;
        $customer->diachi =$req->diachi;
        $customer->sodienthoai=$req->sdt;
        $customer->note=$req->ghichu;
        $customer->save();

        $bill =new hoadon;
        $bill->idkhachhang =$customer->id;
        $bill->ngaylap =date('Y-m-d');
        $bill->tonggia =$cart ->totalPrice;
        $bill->diachi=$req->diachi;
        $bill->ghichu=$req ->ghichu;
        $bill->save();  

        
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');

          }

}
