 @extends('master')
 @section('content')
 <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">

                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">Gà Rán</h3>
                            
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
                                       @foreach($sanpham as $sp)
                                        <div class="product">
                                            <div class="product-img">
                                                <img  src="source/img/{{$sp->img}}" alt="" height="250px">
                                                <div class="product-label">
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <!--thaythe-->
                                                <h3 class="product-name"><a href="{{route('chitietsanpham',$sp->id)}}">{{$sp->tensp}}</a></h3>
                                                <h4 class="product-price">  <h4 class="product-price">{{$sp->giasp}} VND <del class="product-old-price">
                                                 </del></h4></h4>
                                                 <div class="product-rating">
                                                        <div class="product-options">
                                               
                                                </div>
                                                </div>
                                                
                                            </div>
                                            <div class="add-to-cart">
                                                
                                                <a href="{{route('themgiohang',$sp->id)}}"><button class="add-to-cart-btn" name="them"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button></a>
                                            
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
                                       @foreach($giaikhat as $gk)
                                        <div class="product">
                                            <div class="product-img">
                                                <img  src="source/img/{{$gk->img}}" alt="">
                                                <div class="product-label">
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <!--thaythe-->
                                                <h3 class="product-name"><a href="{{route('chitietsanpham',$gk->id)}}">{{$gk->tensp}}</a></h3>
                                                <h4 class="product-price">  <h4 class="product-price">{{$gk->giasp}} VND <del class="product-old-price">
                                                 </del></h4></h4>
                                            
                                                <div class="product-btns">
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                
                                                <a href="{{route('themgiohang',$sp->id)}}"><button class="add-to-cart-btn" name="them"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button></a>
                                            
                                            </div>
                                        </div>
                                        @endforeach

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
@endsection