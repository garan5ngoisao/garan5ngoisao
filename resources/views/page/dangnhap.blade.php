@extends('master')
@section('content')

<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Ga Ran 5 Ngoi Sao</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Trang chủ</a></li>
							<li class="active">Liên hệ</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		
		<!-- SECTION -->
		<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2 align="center">Ga Ran 5 Ngoi Sao</h2>
                <p align="center" style="font-style: italic;">"Ngon khó cưỡng"</p>
                <hr>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{route('login')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-sm-5 col-sm-offset-1">
                        @if(Session::has('flag'))
                        <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                        @endif

                        <a align="center" style="font-size: 25px">Đăng nhập</a>
                        	
                        <hr>

                        <div class="form-group">
                            <label>Tài khoản <a style="color: red">*</a></label>
                            <input type="email" name="email" class="form-control" ">
                            
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu <a style="color: red">*</a></label>
                            <input type="password" name="password" class="form-control" >
                        </div>
                        <div class="form-group">
                            <button type="submit" name="smuserdangnhap" class="btn btn-primary btn-lg" value="userdangnhap">Gửi</button>
                        </div>                        
                    </div>
                </form>
                 <!-- <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="module/signup.php"> -->
                    <div class="col-sm-5">
                        <a align="center" style="font-size: 25px">Đăng ký</a>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{route('signin')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                         @if(count($errors)>0)
                        <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}
                        @endforeach
                    </div>
                    @endif
                        @if(Session::has('thanhcong'))
                        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                        @endif
                
                        <!-- div class="form-group">
                            <label>Tên <a style="color: red">*</a></label>
                            <input type="text" name="hoten" class="form-control" required="required">
                        </div> -->
                        <div class="form-group">
                            <label>Tài khoản <a style="color: red">*</a></label>
                            <input type="text" name="fullname" class="form-control" required="required">
                           
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu <a style="color: red">*</a></label>
                            <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Nhập lại Mật khẩu <a style="color: red">*</a></label>
                            <input type="password" name="re_password" class="form-control" required="required">
                           
                        </div>
                        <div class="form-group">
                            <label>Email <a style="color: red">*</a></label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại<a style="color: red"> *</a></label>
                            <input type="sdt" name="phone" class="form-control" required="required">
                           

                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="smuserdangky" class="btn btn-primary btn-lg" required="required" value="userdangnhap">Gửi</button>
                        </div>   
                    </div>
                </form> 

            </div><!--/.row-->
        </div><!--/.container-->
    </section>
@endsection