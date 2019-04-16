@extends('master')
@section('content')
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li><a href="#"></a></li>
						
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
							<div><label>{{$sanphamt->mota}}</label></div>
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
@endsection