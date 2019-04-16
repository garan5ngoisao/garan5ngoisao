<?php

namespace App\Http\Controllers;
use App\sanpham;
use App\danhmuc;

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
     public function getDanhsach()
    {   $sp=sanpham::all();
        return view('admin.sanpham.danhsach',
            compact('sp'));
    }

    public function getThem()//view
    {
        $tendanhmuc=danhmuc::all();
        $sanpham=sanpham::all();
       
        return view('admin.sanpham.them',
            compact('tendanhmuc'),compact('sanpham'));
    }
    public function postThem(Request $req)//DB
    {
        $sanpham =new sanpham;
        $sanpham->tensp=$req->tensp;
        $sanpham->id_danhmuc=$req->id_danhmuc;
        $sanpham->giasp=$req->giasp;
        $sanpham->mota=$req->mota;

        if($req ->hasFile('img'))// có t?n t?i nha
        {
            $file =$req->file('img');//l?y file hình dó ra gán vào bi?n file
            //ki?m tra t?n hình t?n t?i chua
            //l?y tên hình ra tru?c.
            $name=$file->getClientOriginalName();
            // d?t tên ko trùng
            $img=str_random(4)."_".$name;
            // luu cái hình vào thu m?c
            $file->move('source/img',$img);
            $sanpham->img=$img;
        }else{
            $sanpham->img="";
        }
        $sanpham->save();
        return redirect('admin/sanpham/them')->with('thongbao','them thanh công');
    }
     
     public function getSuaSP($id)
    {
        $tendanhmuc=danhmuc::all();
        $sanpham=sanpham::find($id);
       
        return view('admin/sanpham/sua',
           compact('sanpham','tendanhmuc'));

    }
    public function postSuaSP(Request $req,$id)
    {
 
        $sanpham=sanpham::find($id);
        $sanpham->tensp=$req->tensp;
        $sanpham->id_danhmuc=$req->tendanhmuc;
        $sanpham->giasp=$req->giasp;
        $sanpham->mota=$req->mota;
        
        if($req ->hasFile('img'))// có t?n t?i nha
        {
            $file =$req->file('img');//l?y file hình dó ra gán vào bi?n file
            //ki?m tra t?n hình t?n t?i chua
            //l?y tên hình ra tru?c.
            $name=$file->getClientOriginalName();
            // d?t tên ko trùng
            $img=str_random(4)."_".$name;
            // luu cái hình vào thu m?c
            
            if($req ->hasFile('img'))// có t?n t?i nha
            {
                 $file->move('source/img',$img);
            }
            else{
                unlink('source/img'.$sanpham->img);
            }
            $sanpham->img=$img;
        }
        $sanpham->save();
       return redirect()->back()->with('thongbao','Sua thanh công');
    }

    public function getXoaSP($id)
    {
        $sanpham=sanpham::find($id);
        $sanpham->delete();
        return redirect()->back()
        ->with('thongbao','xoa thanh công');
    }
	
   }