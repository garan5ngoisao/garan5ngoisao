<?php

namespace App\Http\Controllers;
use App\sanpham;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Auth;
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
    public function postSignin(Request $req){

        $this -> validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                

            ],
            [
                'email.require'=>'Vui lòng nhập email nha',
                'email.email'=>'Sai định dạng email nha cưng',
                'email.unique'=>'Email đã tồn tại',
                'password'=>'Vui lòng nhập mật khẩu',
                

            ]
        );
        $user= new User();
        $user->full_name=$req->fullname;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        
        $user->phone=$req->phone;
        $user->address=$req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');

    }
    public function getSearch(Request $req)
    {
        $sanpham= sanpham::where('tensp','like','%'.$req->key.'%')
                            ->orWhere('giasp',$req->key)
                            ->get();
                        return view('page.search',compact('sanpham'));
    }
    public function  postLogin(Request $req)
    {
        // $this->validate($req,
        //     [
        //         'email' as 'required|email',
        //         'password' as 'required|min:6|max:20',

        //     ],
        //     [
        //         'email.required'=>'vui long nhap email',
        //         'email.email'=>'không đúng định dạng email',
        //         'password.required'=>'Vui lòng nhập mật khẩu',
        //         'password.min'=>'Mật khẩu ít nhất 6 kí tự'
        //     ]);
        $credentials=array('email' => $req->email,'password' => $req->password);
        if(Auth::attempt($credentials))
        {
return redirect()->back()->with(['flag'=>'success','message'=>'Đăng Nhập Thành Công']);
        }
        else
            return redirect()->back()->with(['flag'=>'fail','message'=>'Đăng Nhập Không Thành Công']);
    }
    public function getLogout(Request $req)
    {
        Auth::logout();
        return redirect()->route('trang-chu');
    }
}
