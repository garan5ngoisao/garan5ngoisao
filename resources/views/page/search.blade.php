@extends('master')
 @section('content')
 <div class="container">
                <!-- row -->
                <div class="row">

                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">Kết Quả Tìm Kiếm</h3>
                            
                        </div>
                    </div>
                    <!-- /section title -->

                    <!-- Products tab & slick -->
                    <div class="col-md-12">
                        <div class="row">
                            <p><div class="products-tabs"> Hiện Có {{count($sanpham)}} Sản Phẩm</p>
                                <!-- tab -->
                                <div id="tab1" class="tab-pane active">
                                    <div class="products-slick" data-nav="#slick-nav-1">
                                        <!-- product new -->
                                       @foreach($sanpham as $sp)
                                        <div class="col-md-4 col-xs-6">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="source/img/{{$sp->img}}" alt="" height=250px>
                                        <div class="product-label">
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">pizza-tl</p>
                                        <h3 class="product-name"><a href="{{route('chitietsanpham',$sp->id)}}">{{$sp->tensp}}</a></h3>
                                        <h4 class="product-price"> {{$sp->giasp}}VND <del class="product-old-price">
                                                 </del></h4>
                                        
                                        <div class="product-btns">
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="{{route('themgiohang',$sp->id)}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button></a>
                                    </div>
                                </div>
                            </div>
                                        @endforeach
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
        <!--  -->
        </div>
        @endsection