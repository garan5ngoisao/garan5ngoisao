@extends('master')
@section('content')
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
<<<<<<< HEAD
									<img src="img/10.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">Trà đào</a></h3>
									<h4 class="product-price">15000 VND </h4>
=======
									<img src="source/img/1.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">*</p>
									<h3 class="product-name"><a href="#">Hải sản</a></h3>
									<h4 class="product-price">20000 VND</h4>
>>>>>>> timkiemdangnhap
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
<<<<<<< HEAD
									<img src="img/11.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">Sữa tươi</a></h3>
									<h4 class="product-price">15000 VND</h4>
=======
									<img src="source/img/1.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">*</p>
									<h3 class="product-name"><a href="#">Thập cẩm</a></h3>
									<h4 class="product-price">20000 VND</h4>
>>>>>>> timkiemdangnhap
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
<<<<<<< HEAD
									<img src="img/12.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">Nước khoáng</a></h3>
									<h4 class="product-price">10000 VND</h4>
=======
									<img src="source/img/1.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">*</p>
									<h3 class="product-name"><a href="#">Cá ngừ</a></h3>
									<h4 class="product-price">20000 VND</h4>
>>>>>>> timkiemdangnhap
								</div>
							</div>
							<div class="product-widget">
								<div class="product-img">
<<<<<<< HEAD
									<img src="img/9.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">PESSI</a></h3>
									<h4 class="product-price">10000 VND</h4>
=======
									<img src="source/img/1.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">*</p>
									<h3 class="product-name"><a href="#">Gà</a></h3>
									<h4 class="product-price">20000 VND</h4>
>>>>>>> timkiemdangnhap
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
							
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="img/" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">pizza-tl</p>
<<<<<<< HEAD
										<h3 class="product-name"><a href="#"></a></h3>
										<h4 class="product-price"> VND <del class="product-old-price">
=======
										<h3 class="product-name"><a href="{{route('chitietsanpham',$ga->masp)}}">{{$ga->tensp}}</a></h3>
										<h4 class="product-price"> {{$ga->giasp}}VND <del class="product-old-price">
>>>>>>> timkiemdangnhap
												 </del></h4>
										
										<div class="product-btns">
										</div>
									</div>
									<div class="add-to-cart">
										<a href="module/updategiohang.php?id="><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button></a>
									</div>
								</div>
							</div>
													

					

							
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
		
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		
@endsection