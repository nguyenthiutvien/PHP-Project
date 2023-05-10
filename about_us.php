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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- About us -->
    <link rel="stylesheet" href="css/about.css">
    <style>
        .add {
            display: flex;
        }

        #home-links {
            margin: 0 0 0 300px;
            position: absolute;
            background-color: black;
        }
    </style>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end overlay -->
    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>KLTBV TEAM</li>
                            <li><span><i class="fa fa-phone"></i></span>+03 888 333 21</li>
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
                            <li>
                                
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end top-bar -->
   
       
    </script>
    <nav class="navbar navbar-default main-navbar navbar-custom navbar-black" id="mynavbar-1">
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
                <a href="index.php" class="navbar-brand"><span><img style = "width:30px; height: 40px"src="./images/logo1.png" alt=""></span> <span style="color:#DD761E"> TRAVEL</span><span style="color:#2F98B9">DANA</a>
            </div>
            <!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">

                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="index.php">Main Homepage</a></li>
                            <li><a href="cruise-homepage.php">Tour Homepage</a></li>
                            <li><a href="cruise-homepage.php">Sports Tour Homepage</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cruise-homepage.php">Tour Homepage</a></li>
<li><a href="before-you-fly.php">Before You Fly</a></li>
                            <li><a href="travel-insurance.php">Travel insurance</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs</a>
                       
                    </li>
                  
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US</a>
                        
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTACT</a>
                       
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Login Homepage</a></li>
                            <li><a href="registration.php">Registration Homepage</a></li>
                            <li><a href="forgot-password.php">Forgot Password Homepage</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- end navbar -->

    <div class="sidenav-content">
        <div style= "background-color:black;" id="mySidenav" class="sidenav">
            <h2 id="web-name" style= "background-color:black;"><span><img style = "width:30px; height: 40px"src="./images/logo1.png" alt=""></span> <span style="color:#DD761E"> TRAVEL</span><span style="color:#2F98B9">DANA</h2>

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
                     
                    </div>
                    
                    <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
<div class="collapse sub-menu" id="cruise-links">
                        <a href="cruise-homepage.php" class="list-group-item">Tour Homepage</a>
                        <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                        
                    </div>
                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Blogs</a>
                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>About us</a>
                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Contact</a>
                  
                 
                    <!-- end sub-menu -->
                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Account<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="logout.php" class="list-group-item">Login Homepage</a>
                        <a href="registration.php" class="list-group-item">Registration Homepage</a>
                        <a href="forgot-password.php" class="list-group-item">Forgot Password Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!--===== INNERPAGE-WRAPPER ====-->
  <section class="page-cover" id="cover-contact-us">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="page-title">About Us</h1>
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">About Us Page</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

    <div class="container">
        <div class="catalog-2">
            <div class="generality">
                <div class="photo-about-1">
                    <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190622/ourmid/pngtree-51st-labor-day-going-out-travel-cartoon-cartoon-simple-background-image_221984.jpg" style=" height: 500px; width:530px;"alt="">

                </div>
                <div class="text-about">
                <div id="text-title-DaNa"> <b> <span style="color:#2F98B9"> TRAVEL</span><span style="color:#FAA61A">DANA</a> </span></b></div>
                            <p>TRAVELDANA-where converges the most excellent authorities in the world. 
                                This place is a convergence of tourism that is developing very quickly, the number of 
                                international tourists as well as domestic tourists is increasing. 
                                Including the top people about fields such as travel, advice, doctor,...we always
                                work with the highest power in order to bring the best thing for customers. We can 
                                make customers feeling comfortable, enjoyable when they arrive here and then they can 
                                choose the most helpfull and suitable services. Which is our expectation. We will help 
                                you to access, make relations, choose the services and ensure that your travel is the most 
                                successful and exciting one. We have experience about serving thounsand of customers that are 
                                fastidious and facile, from high to low class, from male to female and from home to abroad people. 
                                They have given us many advices, compliments that makes us become more perfect and successful. <br> <br>
                                In particular, the accommodation system always ensures accommodation and relaxation for visitors. 
                                Therefore, a series of hotels and resorts from the most luxurious to the affordable are diverse.
                                Besides bringing enjoyable and sastified feeling to you is our purpose and norm working. We can have no meal, 
                                no sleep, but we are always here to serve and take care of you. Please contact with administrators to
                                be answered and advised all problems and difficulty. Thank you for supporting and loving TRAVELDANA, 
                                that make we are like this.
                            </p>
                </div>
            </div>
        </div>

        <div>
        </div>

        
    </div>
    <div id="team" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-heading">
                                <h2>Meet Our Team</h2>
                                <hr class="heading-line" />
                            </div>
                            <!-- end page-heading -->

                            <div class="owl-carousel owl-theme" id="owl-team">

                                <div class="item">
                                    <div class="member-block">
                                        <div class="member-img">
                                            <img src="images/vien.jpg" class="img-responsive img-circle" style="width: 391px;height: 300px;"alt="member-img" />
                                            <ul class="list-unstyled list-inline contact-links">
                                                <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                            </ul>
                                        </div>
                                        <!-- end member-img -->

                                        <div class="member-name">
                                            <h3>Nguyen Thi Ut Vien</h3>
                                            <p>Director</p>
                                        </div>
                                        <!-- end member-name -->
                                    </div>
                                    <!-- end member-block -->
                                </div>
                                <!-- end item -->

                                <div class="item">
                                    <div class="member-block">
                                        <div class="member-img">
                                            <img src="images/khanh.jpg" class="img-responsive img-circle" style="width: 391px;height: 300px;"alt="member-img" />
                                            <ul class="list-unstyled list-inline contact-links">
                                                <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                            </ul>
                                        </div>
                                        <!-- end member-img -->

                                        <div class="member-name">
                                            <h3>Phung Ngo Duy Khanh</h3>
                                            <p>Director</p>
                                        </div>
                                        <!-- end member-name -->
                                    </div>
                                    <!-- end member-block -->
                                </div>
                                <!-- end item -->

                                <div class="item">
                                    <div class="member-block">
                                        <div class="member-img">
                                            <img src="images/bich.png" class="img-responsive img-circle" style="width: 391px;height: 300px;" alt="member-img" />
                                            <ul class="list-unstyled list-inline contact-links">
                                                <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                            </ul>
                                        </div>
                                        <!-- end member-img -->

                                        <div class="member-name">
                                            <h3>Ho Thi Bich</h3>
                                            <p>Director</p>
                                        </div>
                                        <!-- end member-name -->
                                    </div>
                                    <!-- end member-block -->
                                </div>
                                <!-- end item -->

                                <div class="item">
                                    <div class="member-block">
                                        <div class="member-img">
                                            <img src="images/tai.jpg" class="img-responsive img-circle" style="width: 391px; height: 300px;" alt="member-img" />
                                            <ul class="list-unstyled list-inline contact-links">
                                                <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                            </ul>
                                        </div>
                                        <!-- end member-img -->

                                        <div class="member-name">
                                            <h3>Ho Thi Tai</h3>
                                            <p>Director</p>
                                        </div>
                                        <!-- end member-name -->
                                    </div>
                                    <!-- end member-block -->
                                </div>
                                <!-- end item -->

                                <div class="item">
                                    <div class="member-block">
                                        <div class="member-img">
                                            <img src="images/loan.jpg" class="img-responsive img-circle" style="width: 391px; height: 300px;" alt="member-img" />
                                            <ul class="list-unstyled list-inline contact-links">
                                                <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                            </ul>
                                        </div>
                                        <!-- end member-img -->

                                        <div class="member-name">
                                            <h3>Ho Thi Loan</h3>
                                            <p>Director</p>
                                        </div>
                                        <!-- end member-name -->
                                    </div>
                                    <!-- end member-block -->
                                </div>
                                <!-- end item -->

                            </div>
                            <!-- end owl-team -->
                        </div>
                        <!-- end columns -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end team -->

        </div>

        <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

<div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-contact">
                <h3 class="footer-heading">CONTACT US</h3>
                <ul class="list-unstyled">
                    <li><span><i class="fa fa-map-marker"></i></span>101b Le Huu Trac, Son Tra</li>
                    <li><span><i class="fa fa-phone"></i></span>+00 964 988 91</li>
                    <li><span><i class="fa fa-envelope"></i></span>kltbvcontact@gmail.com</li>
                </ul>
            </div>
            <!-- end columns -->

            <!-- end columns -->

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-links ftr-pad-left">
                <h3 class="footer-heading">RESOURCES</h3>
                <ul class="list-unstyled">
                <li><a href="blog-listing-right-sidebar.php">Home</a></li>
                    <li><a href="blog-listing-right-sidebar.php">Tours</a></li>
                    <li><a href="contact-us.php">Blogs</a></li>
                    <li><a href="logout.php">About us</a></li>
                    <li><a href="registration.php">Contact</a></li>
                    <li><a href="index.php">Account</a></li>
                </ul>
            </div>
            <!-- end columns -->

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                <h3 class="footer-heading">ABOUT US</h3>
                <p>We will bring you the journeys, the greatest experiences in your life. Your happiness and satisfaction are a motive power that impulse us to develop and improve. Thanks for your confidence and interaction. Hope you have a fantastic
                    journeys!!
                </p>
                <ul class="social-links list-inline list-unstyled">
                    <li><a href="https://www.facebook.com/"><span><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="https://twitter.com/"><span><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="https://google.com/"><span><i class="fa fa-google-plus"></i></span></a></li>
                    <li><a href="https://pinterest.com/"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                    <li><a href="https://instagram.com/"><span><i class="fa fa-instagram"></i></span></a></li>
                    <li><a href="https://linkedin.com/"><span><i class="fa fa-linkedin"></i></span></a></li>
                    <li><a href="https://youtube.com/"><span><i class="fa fa-youtube-play"></i></span></a></li>
                </ul>
            </div>
            <!-- end columns -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end footer-top -->

<div id="footer-bottom" class="ftr-bot-black">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                <p>© 2023 <a href="index.php">Traveldana</a>. All rights reserved.</p>
            </div>
            <!-- end columns -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                <ul class="list-unstyled list-inline">
                    <li><a href="index.php">Terms & Condition</a></li>
                    <li><a href="index.php">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- end columns -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end footer-bottom -->

</section>
<!-- end footer -->

     <!-- Page Scripts Starts -->
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
    <script src="js/custom-video.js"></script>
    <script src="js/login.js"></script>
    <!-- Page Scripts Ends -->

    </body>
