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
$sql_sp="select * from thucankem";
$data_sp = $o->query($sql_sp);
$arrSanpham = $data_sp->fetchAll();
//
$id_hoadon = isset($_GET['id_hoadon'])?$_GET['id_hoadon']:"";
$id_user=$_SESSION['userdangnhap']['iduser'];
$sql_hdon="select * FROM tbhoadon WHERE iduser='$id_user' and idhoadon='$id_hoadon' ORDER BY idhoadon DESC";
$data_hdon=$o->query($sql_hdon);
$arrHoaDon=$data_hdon->fetchAll(PDO::FETCH_ASSOC);
//print_r($arrHoaDon);
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

		<title>PIZZA-TL - Ngon Khó Cưỡng</title>

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
						<div class="aside">
							<h3 class="aside-title">Quản lý tài khoản</h3>
							<!--qltk -->
							
							<div class="checkbox-filter">
								<div class="input-checkbox"><a ></a>
									
									<label for="category-1>">
									<a href="qltn.php">Chào bạn: <?php echo $_SESSION['userdangnhap']['hoten'];?>!
										</a>
									</label>
									<br>
									

								</div>
							</div>
							<!--/qltk -->
				
						</div>
						
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						
						<div>
							<h3>Đơn hàng #<?php echo $id_hoadon;?></h3>
							<hr>
							<table width="100%" border="0px">
								<tbody>
									<?php foreach ($arrHoaDon as $key => $v) {
										# code...
									?>
									<tr>
										<!--donhang-->			
										<td colspan="2">Ngày đặt: <?php echo $v['ngaydat'];?></td>
										<td colspan="2">Tình trạng: <?php echo $v['tinhtrang'];?></td>	
										
										<!--/donhang-->

									</tr>
									<?php
											$sql_cthdon="select chitietgoidoan.DONGIA,chitietgoidoan.SOLUONG, thucankem.HINHANH,thucankem.TENTHUCAN FROM chitietgoidoan INNER JOIN thucankem ON chitietgoidoan.MATHUCAN = thucankem.MATHUCAN where idhoadon ='$id_hoadon'";
											$data_cthdon=$o->query($sql_cthdon);
											$arrCTHoaDon=$data_cthdon->fetchAll(PDO::FETCH_ASSOC);
											
										?>
									<?php
										$sumgia=0;
											foreach ($arrCTHoaDon as $key => $value) {
												# code...
											
									?>
									<!--sp don hang-->	
									<tr>
										<td><hr><img height="50px" width="50px" src="img/<?php echo $value['HINHANH'];?>" /></td>
										<td><?php echo $value['TENTHUCAN'];?></td>
										<td><?php echo dinhdangso($value['DONGIA']);?> ₫</td>
										<td>x<?php echo $value['SOLUONG'];?></td>	
									</tr>
									<?php $sumgia+=$value['DONGIA']; } ?>
									<!--sp don hang-->	
									<tr>
										<td colspan="2">
											<hr>	<b>Địa chỉ giao hàng</b>
											<br>
												<?php echo $v['tennguoinhan'];?>
											<br>
												<?php echo $v['diachinguoinhan'];?>
											<br>
												+0<?php echo dinhdangso($v['sdtnguoinhan']);?>

										</td>
										<td colspan="2">
												<b>Tổng cộng<b>
											<br>	<?php echo dinhdangso($sumgia);?> ₫
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>	
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
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
