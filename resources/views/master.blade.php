
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
        <!-- /SECTION -->

        <!-- SECTION -->
       @yield('content')

        <!-- /SECTION -->

        <!-- SECTION -->
        
    
        <!-- /SECTION -->

        <!-- NEWSLETTER -->

        <!-- /NEWSLETTER -->

        <!-- FOOTER -->
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
