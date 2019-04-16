<?php

namespace App\Http\Controllers;
use App\sanpham;
use App\danhmuc;
use App\khachhang;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
    	$sanpham =sanpham::where('id_danhmuc',1)->get();
        $giaikhat =sanpham::where('id_danhmuc',2)->get();
    	return view('page.trangchu',compact('sanpham','giaikhat'));
    }
    public function getgaran(){
    	return view('page.loaisanpham1');
    }
    public function getgiaikhat(){
    	return view('page.loaisanpham2');
    }
    public function getlienhe(){
    	return view('page.lienhe');
    }
    public function getchitietsanpham(Request $req){
        $sanphamt =sanpham::where('masp',$req->masp)->first();
    	return view('page.chitiet',compact('sanphamt'));
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
     
    public function getXoaSP($masp)
    {
        $sanpham=sanpham::find($masp);
        $sanpham->delete();
        return redirect()->back()
        ->with('thongbao','xoa thanh công');
    }
    //khach hang
    public function getDanhsachkh()
    {
        $kh=khachhang::all();
        return view('admin/khachhang/danhsach',compact('kh'));
    }
   public function getThemkh()
    {
        $khachhang=khachhang::all();
        return view('admin/khachhang/them',compact('khachhang'));
    }
    public function postThemkh(Request $req)//DB
    {
        $this->validate($req,
            [
                'tenkh'=>'required|min:3',
                'email'=>'required|email|unique:khachhang,email',
                'sodienthoai'=>'required|min:10|max:10',
                'diachi'=>'required',
               
            ],
            [
                 'tenkh.required'=>'Bạn chưa nhập tên khách hàng!!!',

                  'tenkh.min'=>'Tên phải ít nhất là 3 ký tự!!!',
                  'sodienthoai.min'=>'Số điện thoại chưa được 10 số!!!',
                  'sodienthoai.max'=>'Số điện thoại hơn 10 số!!!',
                   'sodienthoai.required'=>'Bạn chưa nhập số điện thoại!!!',
                 
                   'sodienthoai.unique'=>'số điện thoại đã tồn tại',
                   'diachi.required'=>'bạn chưa nhập địa chỉ!!',

                 'email.required'=>'Bạn chưa nhập email!!!',
                 'email.email'=>'Bạn chưa nhập đúng email',
                 'email.unique'=>'email đã tồn tại',

                
                
            ]
        );
             
        $khachhang =new khachhang;
        $khachhang->tenkh=$req->tenkh;
        $khachhang->diachi=$req->diachi;
        $khachhang->sodienthoai=$req->sodienthoai;
        $khachhang->email=$req->email;

        
        $khachhang->save();
        return redirect('admin/khachhang/them')->with('thongbao','Thêm khách hàng thành công');
    }
     
    public function getXoakh($id)
    {
        $khachhang=khachhang::find($id);
        $khachhang->delete();
        return redirect()->back()
        ->with('thongbao','Xóa khách hàng thành công');
    }
     public function getSuakh($id)
    {
        $khachhang=khachhang::find($id);
        return view('admin/khachhang/sua',
        compact('khachhang'));
    }
    public function postSuakh(Request $req,$id)
    {
           $this->validate($req,
     [
                'tenkh'=>'required|min:3',
                'email'=>'required|email|unique:khachhang,email',
                'sodienthoai'=>'required|min:10|max:10',
                'diachi'=>'required',
              
               
            ],
            [
                 'tenkh.required'=>'Bạn chưa nhập tên khách hàng!!!',

                  'tenkh.min'=>'Tên phải ít nhất là 3 ký tự!!!',
                  'sodienthoai.min'=>'Số điện thoại chưa được 10 số!!!',
                  'sodienthoai.max'=>'Số điện thoại hơn 10 số!!!',
                   'sodienthoai.required'=>'Bạn chưa nhập số điện thoại!!!',
                   'sodienthoai.unique'=>'số điện thoại đã tồn tại',
                   'diachi.required'=>'bạn chưa nhập địa chỉ!!',

                 'email.required'=>'Bạn chưa nhập email!!!',
                 'email.email'=>'Bạn chưa nhập đúng email',
                 'email.unique'=>'email đã tồn tại',

                
                
            ]
        );
              
           
        $khachhang =khachhang::find($id);
        $khachhang->tenkh=$req->tenkh;
        $khachhang->diachi=$req->diachi;
        $khachhang->sodienthoai=$req->sodienthoai;
        $khachhang->email=$req->email;
        
        
        $khachhang->save();
        return redirect()->back()
        ->with('thongbao','Sửa khách hàng thành công');
    }
//ketthuc khach hang

    //danh muc
 

    public function getDanhsachtype()
    {
        $cakeType=ProductType::all();
        return view('admin/cake_type/danhsach',
            compact('cakeType'));
    }
    public function getThemloai()
    {
        $cakeType=ProductType::all();
        return view('admin/cake_type/them',compact('cakeType'));
    }
    public function postThemloai(Request $req)
    {
        $this->validate($req,
            [
                'name'=>'required|min:3|unique:type_products,name',
                'description'=>'required',
            ],
            [
                'name.required'=>'sao không nh?p tên z móa ????',
                'name.min'=>'có tên nào ng?n z ko ... pls làm an có tâm chúc di !!!',
                'name.unique'=>'x`... không l? có 2 cái bánh tên gi?ng nhau ...',
                'description.required'=>'ph?i có noi dung nha nha'
            ]
        );
        $cake_type =new ProductType;
        $cake_type->name=$req->name;
        $cake_type->description=$req->description;

        if($req ->hasFile('image'))// có t?n t?i nha
        {
            $file =$req->file('image');//l?y file hình dó ra gán vào bi?n file
            //ki?m tra t?n hình t?n t?i chua
            //l?y tên hình ra tru?c.
            $name=$file->getClientOriginalName();
            // d?t tên ko trùng
            $image=str_random(4)."_".$name;
            // luu cái hình vào thu m?c
            $file->move('source/image/product',$image);
            $cake_type->image=$image;
        }else{
            $cake_type->image="";
        }
        $cake_type->save();
        return redirect('admin/cake_type/them')->with('thongbao','Thêm khách hàng thành công');

    }
    public function getSualoai($id)
    {
        $caketype=ProductType::find($id);
        return view('admin/cake_type/sua',
        compact('caketype'));
    }
    public function postSualoai(Request $req,$id)
    {
        // dd($req->all())
        $this->validate($req,
            [
                'name'=>'required|min:3|unique:products,name,'.$id,
                'description'=>'required'
            ],
            [
                'name.required'=>'sao không nh?p tên z móa ????',
                'name.min'=>'có tên nào ng?n z ko ... pls làm an có tâm chúc di !!!',
                'name.unique'=>'tên không dc trùng móa oi... không l? có 2 cái bánh tên gi?ng nhau ...',
                'description.required'=>'ph?i có noi dung nha nha'

            ]
        );
        $cake_type=ProductType::find($id);
        $cake_type->name=$req->name;
        $cake_type->description=$req->description;

        if($req ->hasFile('image'))// có t?n t?i nha
        {
            $file =$req->file('image');//l?y file hình dó ra gán vào bi?n file
            //ki?m tra t?n hình t?n t?i chua
            //l?y tên hình ra tru?c.
            $name=$file->getClientOriginalName();
            // d?t tên ko trùng
            $image=str_random(4)."_".$name;
            // luu cái hình vào thu m?c
            $file->move('source/image/product',$image);
            if($req ->hasFile('image'))// có t?n t?i nha
            {
                unlink('source/image/product/'.$cake_type->image);
            }
            $cake_type->image=$image;
        }
        $cake_type->save();
        return redirect()->back()
        ->with('thongbao','Sửa khách hàng thành công công');
    }

    public function getXoaloai($id)
    {

            $caketype = ProductType::find($id);
            $caketype->delete();
            return redirect('admin/cake_type/danhsach')->with('thongbao','Xóa khách hàng thành công.');
    }
   
}

