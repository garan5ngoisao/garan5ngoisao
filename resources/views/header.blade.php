<div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a align="center" href="{{route('trang-chu')}}" class="logo">
                                <h1><img src="source/img/logo.png" alt=""height=80px  /></h1>
                                </a>
                            </div>
                        </div>
                        <!-- /LOGO -->

                        <!-- SEARCH BAR -->
                        <div class="col-md-6">
                            <div class="header-search">
                                <form action="search.php" method="post" enctype="multipart/form-data">
            
                                    <input class="input" placeholder="Pizza thập cẩm" name=ts value="">
                                    <button class="search-btn" name="sm">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                        <!-- /SEARCH BAR -->

                        <!-- ACCOUNT -->
                        <div class="col-md-3 clearfix">
                            <div class="header-ctn">
                                <!-- Wishlist -->
                                <!-- /Wishlist -->

                                <!-- Cart -->
                                @if(Session::has('cart'))
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">

                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Giỏ hàng</span>
                                        
                                        <div class="qty">
                                            @if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif</div>
                                    </a>
                                    <div class="cart-dropdown">
                                        <div class="cart-list">
                                            <!-- product giohang-->
                                            
                                            @foreach($product_cart as $product)
                                            <div class="product-widget">
                                                
                                                <div class="product-img">
                                                    <img src="source/img/{{$product['item']['img']}}" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name">{{$product['item']['tensp']}}<a href=""></a></h3>
                                                    <h4 class="product-price"><span class="qty">
                                                        <div style="right: 39%;position: absolute;" >
                                        <a href="module/xulysoluong.php?idsp=&thaotac=giam" style="font-size: 20px">-</a>{{$product['qty']}}
                                        <a href="{{route('tangsoluong',$product['item']['id'])}}" style="font-size: 20px">+</a>
                                    </div>

                                                        </span>
                                                        <span>{{number_format($product['item']['giasp'])}}</span>VND</h4>
                                                        
                                                </div>
                                                <a href=
                                                    "{{route('xoagiohang',$product['item']['id'])}}"><button class="delete" name="xoa"><i class="fa fa-close"></i></button></a>
                                                    
                                            </div>
                                           
                                         @endforeach

                                            <!-- /product giohang-->
                                        </div>
                                        <div class="cart-summary">
                                            <small></small>

                                            <h5>Tổng cộng:{{Session('cart')->totalPrice}}VND</h5>
                                        </div>
                                        <div class="cart-btns">
                                            <a href="#">Nâng cấp</a>
                                            <a href="{{route('dathang')}}">Xem giỏ hàng  <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- /Cart -->

                                <!-- Menu Toogle -->
                                <div class="menu-toggle">
                                    <a href="#">
                                        <i class="fa fa-bars"></i>
                                        <span>Menu</span>
                                    </a>
                                </div>
                                <!-- /Menu Toogle -->
                            </div>
                        </div>
                        <!-- /ACCOUNT -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
