<!doctype html>
<html lang="en">

<head>
    <title>TRAVEL DANA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/atomic.css">


    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <script src="js/home.js"></script>
</head>


<body id="main-homepage">
    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." required />
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button>
                            </span>
                        </div>
                        <!-- end input-group -->
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end form-center -->
        </div>
        <!-- end overlay-content -->
    </div>
    <!-- end overlay -->
    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>KTLBV TEAM</li>
                            <li><span><i class="fa fa-phone"></i></span>+03 322 111 02</li>
                        </ul>
                    </div>
                    <!-- end info -->
                </div>
                <!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <li><a href="login.php" id="thanh1"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <li><a href="registration.php" id="thanh2"><span><i class="fa fa-plus"></i></span>Sign up</a></li>
                            <li><a href="logout.php" id="thanh3"><span><i class="fa fa-sign-out"></i></span>Logout</a></li>
                            <li><a href="cart.php" id="thanh4"><span><i class="fa fa-shopping-cart"></i></span>Cart</a>
                            </li>
                           

                        </ul>
                    </div>
                </div>
                <!-- end links -->
            </div>
            <!-- end columns -->
        </div>

        <!-- end row -->
    </div>
    
        
    
    <nav class="navbar navbar-default main-navbar navbar-custom navbar-brow" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-search hidden-lg">
                    <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </div>
                <a href="index.php" class="navbar-brand"><span><img style = "width=30px; height: 40px"src="./images/logo.png" alt=""></span> <span> TRAVEL</span><span style="color:#2F98B9">DANA</a>
            </div>
            <!-- end navbar-header -->
    
            <div class="collapse navbar-collapse" id="myNavbar1">
            
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="index.php">Main Homepage</a></li>
                            <li><a href="cruise-homepage.php">Tour Homepage</a></li>
                      
                            <li><a href="cruise-homepage.php">Sports Tour Homepage</a></li>
                            <li><a href="blog-listing-right-sidebar.php">Blog Homepage</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Login Homepage</a></li>
                            <li><a href="registration.php">Registration Homepage</a></li>
                            <li><a href="forgot-password.php">Forgot Password Homepage</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-listing-right-sidebar.php">Blog Homepage</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a href="#">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cruise-homepage.php">Tour Homepage</a></li>
                            <li><a href="before-you-fly.php">Before You Fly</a></li>
                            <li><a href="travel-insurance.php">Travel insurance</a></li>
                            <li><a href="holidays.php">Holidays</a></li>
                        </ul>
                    </li>
                  
                        <ul class="dropdown-menu">
                          
                            <li><a href="before-you-fly.php">Before You Fly</a></li>
                            <li><a href="travel-insurance.php">Travel insurance</a></li>
                            <li><a href="holidays.php">Holidays</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Standard <span>Pages</span></li>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                  
                                       
                                        </ul>
                                    </div>

                                    

                                    <div class="col-md-4">
                                        <ul class="list-unstyled">
                                           
                                            <li><a href="logout.php">Login</a></li>
                                            <li><a href="registration.php">Registration</a></li>
                                            <li><a href="forgot-password.php">Forgot Password</a></li>
                                            <li><a href="error-page.php">404 Page</a></li>
                                            <li><a href="#">Coming Soon</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Extra <span>Pages</span></li>
                                            <li><a href="before-you-fly.php">Before Fly</a></li>
                                            <li><a href="travel-insurance.php">Travel Insurance</a></li>
                                            <li><a href="holidays.php">Holidays</a></li>
                                            <li><a href="thank-you.php">Thank You</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                </ul>
            </div>

            <!-- end navbar collapse -->
        </div>
        <!-- end container -->

    </nav>
    <!-- end navbar -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><img style = "width=30px; height: 40px"src="./images/logo.png" alt=""></span> <span style="color:#DD761E"> TRAVEL</span><span style="color:#2F98B9"> DANA</span> </h2>
            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div>
                <!-- end close-btn -->

                <div class="list-group panel">

                    <a href="#flight-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="home-links">
                        <a href="index.php" class="list-group-item active">Main Homepage</a>
                        <a href="cruise-homepage.php" class="list-group-item">Tour Homepage</a>
                
                        <a href="cruise-homepage.php" class="list-group-item">Sports Tour Homepage</a>
                        <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Homepage</a>
                    </div>
                    <!-- end sub-menu -->
                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Account<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="logout.php" class="list-group-item">Login Homepage</a>
                        <a href="registration.php" class="list-group-item">Registration Homepage</a>
                        <a href="forgot-password.php" class="list-group-item">Forgot Password Homepage</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Blogs<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="tours-links">
                        <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Homepage</a>
                        <a href="about-us.php" class="list-group-item">About Us</a>
                        <a href="contact-us.php" class="list-group-item">Contact Us</a>
                        <a href="#" class="list-group-item">Comingsoon</a>
                    </div>
                    <!-- end sub-menu -->

                  
                    <!-- end sub-menu -->

                    <div class="collapse sub-menu" id="cars-links">
                  
                        <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                    
                    </div>
                    <!-- end sub-menu -->

                    <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="pages-links">
                        <div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                        <a href="about-us.php" class="list-group-item">About Us</a>
                        <a href="contact-us.php" class="list-group-item">Contact Us</a>
                 
                  
                        <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                        <a href="error-page.php" class="list-group-item">Dashboard</a>
                        <a href="error-page.php" class="list-group-item">User Profile</a>
                        <a href="error-page.php" class="list-group-item">Booking</a>
            
                        
                        <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                        <a href="logout.php" class="list-group-item">Login</a>
                        <a href="registration.php" class="list-group-item">Registration</a>
                        <a href="forgot-password.php" class="list-group-item">Forgot Password</a>
                        <a href="error-page.php" class="list-group-item">404 Page</a>
                        <a href="#" class="list-group-item">Coming Soon</a>
                        <div class="list-group-heading list-group-item">Extra <span>Pages</span></div>
                        <a href="before-you-fly.php" class="list-group-item">Before Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel Insurance</a>
                    
                        <a href="thank-you.php" class="list-group-item">Thank You</a>
                    </div>
                    <!-- end sub-menu -->
                </div>
                <!-- end list-group -->
            </div>
            <!-- end main-menu -->
        </div>

        <!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->


    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-1">

        <div class="flexslider slider" id="slider-1">

            <ul class="slides">

                <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/Tp-Đà-Nẵng.jpg) 50% 0%; background-size:cover;height:100%;">
                    <div class=" meta">

                        <div class="container">
                            <!-- <h2>Discover</h2> -->
                            <h1>KLTBV Travel</h1>
                            <a href="#" class="btn btn-default">View More</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-1 -->

                <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/cauvang.jpg) 50% 0%;
	background-size:cover;
	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            
                         
                            <h1>KLTBV TRAVEL</h1>
                            <a href="#" class="btn btn-default">View More</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-2 -->
                <li class="item-2" style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/Tp-Đà-Nẵng.jpg) 50% 0%;
                background-size:cover;
                height:100%;">
                    <div class=" meta">
                        <div class="container">
             
                            <h1>KLTBV TRAVEL</h1>
                            <a href="#" class="btn btn-default">View More</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>

            </ul>
        </div>
        <!-- end slider -->

        <div class="search-tabs" id="search-tabs-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="nav nav-tabs center-tabs">
                          =
                            <li><a href="#tours" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="st-text">Tours</span></a></li>
        
                        </ul>

                        <div class="tab-content">

                            <div id="flights" class="tab-pane in active">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="From">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="To">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" placeholder="Check In">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" placeholder="Check Out">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Adults</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div>
                                        <!-- end columns -->

                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end flights -->

                            <div id="hotels" class="tab-pane">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" placeholder="Check In">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" placeholder="Check Out">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Rooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-4">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Adults</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-4">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Kids</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div>
                                        <!-- end columns -->

                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end hotels -->

                            <div id="tours" class="tab-pane">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control" placeholder="City,Country" />
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Month</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Adults</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Kids</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div>
                                        <!-- end columns -->

                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end tours -->

                           
                          

                 

                        </div>
                        <!-- end tab-content -->

                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end search-tabs -->

    </section>
    <!-- end flexslider-container -->

       <!--=============== HOTEL OFFERS ===============-->
       <section id="hotel-offers" class="section-padding">
        <div class="container">
            <?php
            include("admin_set.php");
            $tourHot = new tourHot();
            $sql = "select * from tour_hot";
            $rows = $tourHot->fetch($sql);
            if (!empty($rows)) {
                foreach ($rows as $row) {
                    $id_hot = $row['id_hot'];
                    $name_hot = $row['name_hot'];
                    $img_hot = $row['img_hot'];
                    $price_hot = $row['price_hot'];
                    $detail_hot = $row['detail_hot'];
                    $from_to_hot = $row['from_to_hot'];
                    echo
                    '<div class="modal fade" id="myModalHot' . $id_hot . '" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <div class="row g-0">
                                            <div class="col-md-8">
                                                <img src="images/' . $img_hot . '" alt="" style = "width: 350px; height: 260px;">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card-body">
                                                <h5 class="card-title">' . $name_hot . '</h5>
                                                <p class="card-text">' . $detail_hot . '</p>
                                                <p class="card-text">From: ' . $from_to_hot . '</p>
                                                <p class="card-text"><medium class="text-muted"><b>$' . $price_hot . '</b></medium></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="booking_hot.php?id=' . $id_hot . '"><button type="button" class="btn btn-primary" onclick="">Add to cart</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            }
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Tour Hot</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                        <?php
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_hot = $row['id_hot'];
                                $name_hot = $row['name_hot'];
                                $img_hot = $row['img_hot'];
                                $price_hot = $row['price_hot'];
                                $detail_hot = $row['detail_hot'];
                                $from_to_hot = $row['from_to_hot'];
                                echo "<div class='item'>
                            <div class='main-block hotel-block'>
                                    <div class='main-img'>
                                        <a href='#'><img src='images/$img_hot' class='img-responsive' alt='hotel-img'/></a>
                                        <div class='main-mask'>
                                            <ul class='list-unstyled list-inline offer-price-1'>
                                                <li class='price'>$price_hot<span class='divider'>|</span><span class='pkg'>Avg/Week</span></li>
                                                    <li class='rating'>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star lightgrey'></i></span>
                                                    </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class='main-info hotel-info'>
                                        <div class='arrow'>
                                            <div data-toggle='modal' data-target='#myModalHot$id_hot'><i class='fa fa-angle-right'></i></div>
                                        </div>
                                        <div class='main-title hotel-title'>
                                            <a href'#'> $name_hot</a>
                                            <p>From: $from_to_hot</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                ";
                            }
                        }
                        ?>
                    </div>
                    <!-- end owl-hotel-offers -->

                   
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <!-- <script src="js/custom-video.js"></script>
    <script src="js/login.js"></script> -->
    </body>

</html>
    <!-- end hotel-offers -->
