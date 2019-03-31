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
//print_r($_SESSION['userdangnhap']); 
//print_r($_SESSION['giohang']);

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

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">PIZZA</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product new -->
										<?php
										
										foreach ($arrSanpham as $key => $v)
		 									{
		 										if($v['THUOCLOAI']=='PIZZA'){

		 								?>
										<div class="product">
											<div class="product-img">
												<img  src="img/<?php echo $v['HINHANH'];?>" alt="">
												<div class="product-label">
												</div>
											</div>
											<div class="product-body">
												<!--thaythe-->
												<h3 class="product-name"><a href="product.php?id=<?php echo $v['MATHUCAN']?>"><?php echo $v['TENTHUCAN']; ?></a></h3>
												<h4 class="product-price">	<h4 class="product-price"><?php 
													$giacu=$v['DONGIA'];
													echo dinhdangso($giacu);
												 ?> VND <del class="product-old-price">
												 </del></h4></h4>
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
												
											</div>
											<div class="add-to-cart">
												
												<a href="module/updategiohang.php?id=<?php echo $v['MATHUCAN']; ?>"><button class="add-to-cart-btn" name="them"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button></a>
											
											</div>
										</div>
										<?php }}?>
										<!-- /product new-->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">GIẢI KHÁT</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product hot-->
										<?php
										foreach ($arrSanpham as $key => $v)
		 									{
		 										if($v['THUOCLOAI']=='NUOC UONG'){

		 								?>
										<div class="product">
											<div class="product-img">
												<img  src="img/<?php echo $v['HINHANH'];?>" alt="">
												<div class="product-label">
												</div>
											</div>
											<div class="product-body">
												<!--thaythe-->
												<h3 class="product-name"><a href="product.php?id=<?php echo $v['MATHUCAN']?>"><?php echo $v['TENTHUCAN']; ?></a></h3>
												<h4 class="product-price">	<h4 class="product-price"><?php 
													$giacu=$v['DONGIA'];
													echo dinhdangso($giacu);
												 ?> VND <del class="product-old-price">
												 </del></h4></h4>
											
												<div class="product-btns">
												</div>
											</div>
											<div class="add-to-cart">
												
												<a href="module/updategiohang.php?id=<?php echo $v['MATHUCAN']; ?>"><button class="add-to-cart-btn" name="them"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button></a>
											
											</div>
										</div>
										<?php }}?>
										<!-- product hot -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

		<!-- /SECTION -->

		<!-- SECTION -->
		
	
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
