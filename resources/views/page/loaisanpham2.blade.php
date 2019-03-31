@extends('master')
@section('content')
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
									<img src="img/4.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">Hải sản</a></h3>
									<h4 class="product-price">20000 VND</h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="img/5.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">Thập cẩm</a></h3>
									<h4 class="product-price">20000 VND</h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="img/6.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
									<h3 class="product-name"><a href="#">Cá ngừ</a></h3>
									<h4 class="product-price">20000 VND</h4>
								</div>
							</div>
							<div class="product-widget">
								<div class="product-img">
									<img src="img/7.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">PIZZA-TL</p>
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
							
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="img/" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">pizza-tl</p>
										<h3 class="product-name"><a href="#"></a></h3>
										<h4 class="product-price"> VND <del class="product-old-price">
												 </del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
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
@endsection