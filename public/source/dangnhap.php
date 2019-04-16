<?php
/*
//Ket noi csdl
$o = new PDO("mysql:host=localhost; dbname=dbsago", "root", "");
//Hien thi tieng viet co dau
$o->query("set names 'utf8' ");
//khoi tao session
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = array();
*/
include "include/connect.php";
//truyvansql
$sql="select * from thucankem";
$data = $o->query($sql);
$arrSanpham = $data->fetchAll();
$errortaitonid = isset($_GET['id_user'])?$_GET['id_user']:"";
//echo "check error: $errortaitonid";
isset($_SESSION['userdangnhap']['hoten'])?header('location:index.php'):"";
//
function dinhdangso(&$number)
{
	$format_number = number_format($number, 0, '', '.');
	echo $format_number;
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>PIZZA-TL - NGON KHÓ CƯỠNG</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<?php include "include/menu.php" ?>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Regular Page</h3>
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
                <h2 align="center">PIZZA-TL</h2>
                <p align="center" style="font-style: italic;">"Ngon khó cưỡng"</p>
                <hr>
            </div> 

            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>


                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="module/login.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <a align="center" style="font-size: 25px">Đăng nhập</a>
                        	<?php
                            	if($errortaitonid=="errorlogin")
                            		echo '<br><a style="color:red"><i>(*) Vui lòng đăng nhập để tiếp tục!</i></a>'
                            ?>
                        <hr>

                        <div class="form-group">
                            <label>Tài khoản <a style="color: red">*</a></label>
                            <input type="text" name="u" class="form-control" required="required">
                            
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu <a style="color: red">*</a></label>
                            <input type="password" name="p" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="smuserdangnhap" class="btn btn-primary btn-lg" value="userdangnhap">Gửi</button>
                        </div>                        
                    </div>
                </form>
                 
                 <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{routes(signin)}">
                    <div class="col-sm-5">
                      
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}
                        @endforeach
                    @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                    @endif
                

                        <a align="center" style="font-size: 25px">Đăng ký</a>
            
                        <!-- <hr> -->

                        
                       <!--  <div class="form-group">
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

               

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
