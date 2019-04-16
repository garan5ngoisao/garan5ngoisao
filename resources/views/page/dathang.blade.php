@extends('master')
@section('content')
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
		
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<form action="{{route('dathang')}}" method="post">
					<input type="hidden" name="_token"value="{{csrf_token()}}">
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">

								<h3 class="title">Thông tin khách hàng</h3>
							</div>
							
							<div class="form-group">
								<input class="input" type="text" name="hoten" placeholder="Họ" value="">
							</div>
							
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" value="">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="diachi" placeholder="Địa chỉ nhận hàng" value="">
							</div>
							
							<div class="form-group">
								<input class="input" type="tel" name="sdt" placeholder="Số điện thoại" value="">
							</div>
							
							<div class="form-group">
								<textarea class="input" type="text" name="ghichu" placeholder="Ghi chú đơn hàng" value=""></textarea>
							</div>
						
						</div>
						<!-- /Billing Details -->

					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Thông tin giỏ hàng</h3>
						</div>
						
						<div class="order-summary">
							@if(Session::has('cart'))
						@foreach($product_cart as $cart)
							<div class="order-col">
								<div><strong>Tên sản phẩm: {{$cart['item']['tensp']}}</strong></div><br>
								<div><strong>Giá: {{$cart['item']['giasp']}}VND</strong></div>
								<div><strong>Số lượng: {{$cart['qty']}}</strong></div>
							</div>
							@endforeach
						
							<div class="order-products">
								<!--/sanphamgiohang-->
								
								<div class="order-col">
									<div><a style="color: red; font-size: 12px"> </a></div>
									<!--<div style="right: 39%;position: absolute;" >
										<a href="module/xulysoluong.php?idsp=&thaotac=giam" style="font-size: 20px">-</a>
										<a href="module/xulysoluong.php?idsp=&thaotac=tang" style="font-size: 20px">+</a>
									</div>-->
									
									<div > </div>
								</div>
								<!--/sanphamgiohang-->
								
							</div>
							
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">{{Session('cart')->totalPrice}}VND</strong></div>
							</div>
						</div>
						@endif
						<hr>
						
			
						<input style="float: right;" type="submit" class="primary-btn order-submit"  value="Đặt hàng">
					</div>
					<!-- /Order Details -->
				
				</form>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
	</div>
    @endsection