<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>PIZZA-TL - NGON KHÓ CƯỠNG</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="source/css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="source/css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="source/css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="source/css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="source/css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="source/css/style.css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!-- HEADER -->
        
       
        <header>
            <!-- TOP HEADER -->
            <div id="top-header">
                <div class="container">

                    <ul class="header-links pull-right">
                        
                        <li><a href="qltn.php">Xin chào  </a></li>
                        <li><a href="module/logout.php">Đăng xuất</a></li>
                        
                        
                        <li><a href="#"><i class="fa fa-dollar"></i> VND</a></li>
                        <li><a href="../dangnhap.php"><i class="fa fa-user-o"></i> Đăng Nhập</a></li>
                        

                    </ul>
                </div>
            </div>
            <!-- /TOP HEADER -->

            <!-- MAIN HEADER -->
              @include ('header')
            <!-- /MAIN HEADER -->
        </header>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        @include ('menu')
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
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li><a href="#">Sản Phẩm</a></li>
						
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
				
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
							
								<img src="source/img/{{$sanphamt->img}}" alt="">
							</div>
						
							 -->
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="source/img/{{$sanphamt->img}}" alt="">
							</div>
						
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$sanphamt->tensp}}</h2>
							<div>
							
							</div>
							<div>
								<h3 class="product-price"> {{$sanphamt->giasp}}VND <del class="product-old-price"></del></h3>
								<span class="product-available">
								</span>
							</div>
							<p></p>

							<div class="product-options">
								<!--
								<label>
									Size
									<select class="input-select">
										<option value="0">X</option>
									</select>
								</label>
								-->
								
							</div>
						<form action = "module/updategiohang.php" method="get">
							<div class="add-to-cart">
								<div class="qty-label">
									Số Lượng
									<div class="input-number">
										<input type="number" value="1" name="soluong">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
									<input type="hidden" value="" name="id">
								</div>
								<a><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button></a>
							</div>
						</form>
						
							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
@include ('footer')
        <!-- /FOOTER -->

        <!-- jQuery Plugins -->
        <script src="source/js/jquery.min.js"></script>
        <script src="source/js/bootstrap.min.js"></script>
        <script src="source/js/slick.min.js"></script>
        <script src="source/js/nouislider.min.js"></script>
        <script src="source/js/jquery.zoom.min.js"></script>
        <script src="source/js/main.js"></script>

    </body>
</html>
s