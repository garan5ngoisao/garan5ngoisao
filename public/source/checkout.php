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
//truy van thong tin khach
$sql_tv="select * FROM tbthanhvien";
$data_tv = $o->query($sql_tv);
$arrThanhvien = $data_tv->fetchAll();
//print_r($arrThanhvien);
//
$aa=isset($_GET['idsp'])?$_GET['idsp']:'';

if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = array();
//print_r($_SESSION['giohang']);
if(!isset($_SESSION['userdangnhap']['hoten']))
	header("Location:../dangnhap.php?id_user=errorlogin");
//
function dinhdangso(&$number)
{
	$format_number = number_format($number, 0, '', '.');
	echo $format_number;
}
function km(&$gia,$km)
{
	$giamoi=$gia;
	return $giamoi;
	
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
		<!-- HEADER -->
		<?php
			include "include/header.php"
		?>
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
						<h3 class="breadcrumb-header">Giỏ hàng</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<form action="module/inhoadon.php" method="post">
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">

								<h3 class="title">Thông tin khách hàng</h3>
							</div>
							<?php
								foreach ($arrThanhvien as $key => $v) {
									if($v['iduser']==$_SESSION['userdangnhap']['iduser']){
									# code...
								
							?>
							<div class="form-group">
								<input class="input" type="text" name="hoten" placeholder="Họ" value="<?php echo $v['hoten'];?>">
							</div>
							
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" value="<?php echo $v['email'];?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="diachi" placeholder="Địa chỉ nhận hàng" value="<?php echo $v['diachi'];?>">
							</div>
							
							<div class="form-group">
								<input class="input" type="tel" name="sdt" placeholder="Số điện thoại" value="<?php echo $v['sdt'];?>">
							</div>
							
							<div class="form-group">
								<input class="input" type="text" name="ghichu" placeholder="Ghi chú đơn hàng" value="">
							</div>
						<?php }}?>
						</div>
						<!-- /Billing Details -->

					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Thông tin giỏ hàng</h3>
						</div>

						<div class="order-summary">
							<div class="order-col">
								<div><strong>Tên sản phẩm</strong></div>
								<div><strong>Giá</strong></div>
							</div>
							
							<div class="order-products">
								<!--/sanphamgiohang-->
								<?php
								$sumgia=0;
								foreach ($_SESSION['giohang'] as $key => $value) {
									$sql ="select * from thucankem where MATHUCAN='$key' ";
									$data = $o->query($sql);
									$arr = $data->fetchAll();
									$ten = $arr[0]['TENTHUCAN'];
									$gia = $arr[0]['DONGIA'];
									$giasp=km($gia,$arr[0])*$value;
									?>
								<div class="order-col">
									<div><?php echo $ten; ?><a style="color: red; font-size: 12px"> </a></div>
									<div style="right: 39%;position: absolute;" >
										<a href="module/xulysoluong.php?idsp=<?php echo $key;?>&thaotac=giam" style="font-size: 20px">-</a><?php echo $value;?>
										<a href="module/xulysoluong.php?idsp=<?php echo $key;?>&thaotac=tang" style="font-size: 20px">+</a>
									</div>
									<div ><?php echo dinhdangso($giasp); ?> VND</div>
									<div ><?php if($aa=10)
									echo "liên hệ cửa hàng "; ?> </div>
								</div>
								<!--/sanphamgiohang-->
								<?php $sumgia+=$giasp; }?>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?php echo number_format($sumgia);?>VND</strong></div>
							</div>
						</div>
						<hr>
						
			
						<input style="float: right;" class="primary-btn order-submit"  value="Đặt hàng">
					</div>
					<!-- /Order Details -->
				</div>
			</form>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->

		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<?php include "include/footer.php"?>
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