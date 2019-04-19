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
							<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
							<li class="active">Gà Rán</li>
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
							<h3 class="aside-title"></h3>
							<div class="product-widget">
								<div class="product-img">
									<img src="source/img/3.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">*</p>
									<h3 class="product-name"><a href="#">Hải sản</a></h3>
									<h4 class="product-price">20000 VND</h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="source/img/3.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">*</p>
									<h3 class="product-name"><a href="#">Thập cẩm</a></h3>
									<h4 class="product-price">20000 VND</h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="source/img/3.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">*</p>
									<h3 class="product-name"><a href="#">Cá ngừ</a></h3>
									<h4 class="product-price">20000 VND</h4>
								</div>
							</div>
							<div class="product-widget">
								<div class="product-img">
									<img src="source/img/3.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">*</p>
									<h3 class="product-name"><a href="#">Gà</a></h3>
									<h4 class="product-price">20000 VND</h4>
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
							@foreach($garan as $ga)
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="source/img/{{$ga->img}}" alt="" height=250px>
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">gà rán fivestar</p>
										<h3 class="product-name"><a href="{{route('chitietsanpham',$ga->id)}}">{{$ga->tensp}}</a></h3>
										<h4 class="product-price"> {{$ga->giasp}}VND <del class="product-old-price">
												 </del></h4>
										
										<div class="product-btns">
										</div>
									</div>
									<div class="add-to-cart">
										<a href="{{route('themgiohang',$ga->id)}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button></a>
									</div>
								</div>
							</div>
							@endforeach
													

					

							
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