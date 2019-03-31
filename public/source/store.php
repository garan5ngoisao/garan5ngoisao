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
//truyvansql sanpham
$sql_sp="select * from thucankem where THUOCLOAI='PIZZA'";
$data_sp = $o->query($sql_sp);
$arrSanpham = $data_sp->fetchAll();
//truyvansql nhomsp
$sql_Nhomsp = "select * from danhmucdoan";
$data_Nhomsp = $o->query($sql_Nhomsp);
$arrNhomsp = $data_Nhomsp->fetchAll();
//truyvansql hangdt
//$sql_Hangdt = "select * from tbhangdt";
//$data_Hangdt = $o->query($sql_Hangdt);
//$arrHangdt = $data_Hangdt->fetchAll();
//error
$checkloi=isset($_GET['error'])?($_GET['error']):"";
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
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Trang chủ</a></li>
							<li class="active">Sản phẩm</li>
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
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
				
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
						<!-- /aside Widget -->

						<!-- aside Widget -->

						<div class="aside">
							<h3 class="aside-title">CÓ thể bạn cần</h3>
							<div class="product-widget">
								<div class="product-img">
									<img src="img/10.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">Trà đào</a></h3>
									<h4 class="product-price">15000 VND </h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="img/11.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">Sữa tươi</a></h3>
									<h4 class="product-price">15000 VND</h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="img/12.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">Nước khoáng</a></h3>
									<h4 class="product-price">10000 VND</h4>
								</div>
							</div>
							<div class="product-widget">
								<div class="product-img">
									<img src="img/9.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">PESSI</a></h3>
									<h4 class="product-price">10000 VND</h4>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->
					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label><!--
									Sắp xếp:
									<select class="input-select">
										<option value="0">Yêu thích</option>
										<option value="1">Giá tăng</option>
										<option value="1">Giá giảm</option>
									</select>
								</label>-->
								<!--
								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							-->
							</div>
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<?php
								foreach ($arrSanpham as $key => $v) {
									
								
							?>
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="img/<?php echo $v['HINHANH'];?>" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">pizza-tl</p>
										<h3 class="product-name"><a href="#"><?php echo $v['TENTHUCAN']; ?></a></h3>
										<h4 class="product-price"><?php 
													$giacu=$v['DONGIA'];
													echo dinhdangso($giacu);
												 ?> VND <del class="product-old-price">
												 </del></h4>
										<div class="product-rating">
											<div class="product-options">
												<label>
												SIZE
												<select class="input-select">
													<option value="0">Vừa</option>
													<option value="1">Lớn</option>
												</select>
												</label>
												</div>
										</div>
										<div class="product-btns">
										</div>
									</div>
									<div class="add-to-cart">
										<a href="module/updategiohang.php?id=<?php echo $v['MATHUCAN']; ?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button></a>
									</div>
								</div>
							</div>
													<?php  }?>

					

							
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
					
						<!-- /store bottom filter -->
					</div>
					
				</div>
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
