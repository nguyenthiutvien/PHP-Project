<!doctype html>
<html lang="en">

<head>
    <title>All Tour Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
            // Send Search Text to the server
            $("#search").keyup(function() {
                let searchText = $(this).val();
                if (searchText != "") {
                    $.ajax({
                        url: "search_all.php",
                        method: "post",
                        data: {
                            query: searchText,
                        },
                        success: function(response) {
                            $("#show-list").html(response);
                        },
                    });
                }

            });
        });
    </script>
</head>


<body id="cruise-homepage">

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
                            <form>
                                    <ul class="list-inline">
                                        
                                        
                                        <li>
                                            <a id="ten"><span><i class="fa fa-circle blackiconcolor"></i></span>
                                                <?php
                                                include('login_set.php');
                                                $ten = new user();
                                                $rows = $ten->fetch();
                                                if (!empty($rows)) {
                                                    foreach ($rows as $row) {
                                                        $name = $row['activity_name'];
                                                    }
                                                    echo $name;
                                                }
                                                ?></a>
                                        </li>
                                    </ul>

                                </form>   
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
    <!-- end container -->

    <!-- end top-bar -->
    <script type="text/javascript">
        function inten() {
            document.getElementById("ten").style.display = "block";
            document.getElementById("thanh3").style.display = "block";
            document.getElementById("thanh4").style.display = "block";
            document.getElementById("thanh1").style.display = "none";
            document.getElementById("thanh2").style.display = "none";
        }
        <?php
        $rows = $ten->fetch();
        if (!empty($rows)) {
            foreach ($rows as $row) {
                $name = $row['activity_name'];
            }
            echo "inten();";
        }
        ?>
    </script>
       
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
                <a href="index.php" class="navbar-brand"><span><img style = "width=30px; height: 40px"src="./images/logo1.png" alt=""></span> <span style="color:#DD761E"> TRAVEL</span><span style="color:#2F98B9">DANA</a>
            </div>
            <!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">

                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="index.php">Main Homepage</a></li>
                            <li><a href="allTour.php">Tour Homepage</a></li>
                            <li><a href="allTour.php">Sports Tour Homepage</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="allTour.php">Tour Homepage</a></li>
                            <li><a href="before-you-fly.php">Before You Fly</a></li>
                            <li><a href="travel-insurance.php">Travel insurance</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown"><a href="blog.php" >Blogs</a>
                       
                    </li>
                  
                    <li class="dropdown"><a href="#" >ABOUT US</a>
                        
                    </li>
                    <li class="dropdown"><a href="contact.php">CONTACT</a>
                       
                    </li>
                    <li class="dropdown"><a href="#" >Account<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Login Homepage</a></li>
                            <li><a href="registration.php">Registration Homepage</a></li>
                            <li><a href="forgot-password.php">Forgot Password Homepage</a></li>
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
        <div style= "background-color:black;" id="mySidenav" class="sidenav">
            <h2 id="web-name" style= "background-color:black;"><span><img style = "width=30px; height: 40px"src="./images/logo1.png" alt=""></span> <span style="color:#DD761E"> TRAVEL</span><span style="color:#2F98B9">DANA</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div>
                <!-- end close-btn -->

                <div class="list-group panel">
                <a href="#flight-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="home-links">
                        <a href="index.php" class="list-group-item active">Main Homepage</a>
                        <a href="allTour.php" class="list-group-item">Tour Homepage</a>
                        <a href="allTour.php" class="list-group-item">Sports Tour Homepage</a>
                     
                    </div>
                    
                    <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cruise-links">
                        <a href="allTour.php" class="list-group-item">Tour Homepage</a>
                        <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                        
                    </div>
                    <!-- end sub-menu -->
                  
                    <!-- end sub-menu -->

                    <a href="blog.php" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Blogs</a>
                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>About us</a>
                    <a href="contact.php" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Contact</a>
                  
                 
                    <!-- end sub-menu -->
                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Account<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="logout.php" class="list-group-item">Login Homepage</a>
                        <a href="registration.php" class="list-group-item">Registration Homepage</a>
                        <a href="forgot-password.php" class="list-group-item">Forgot Password Homepage</a>
                    </div>
                </div>
                <!-- end list-group -->
            </div>
            <!-- end main-menu -->
        </div>

        <!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->


    <!--=============== CRUISE capitalS ===============-->
    <section id="cruise-capitals" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>ALL TOURS</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->

                    <div class="row" id="show-list">
                    <!-- Cruise -->
                        <?php
                         include ("admin_set.php");
                        $tourCruise = new tourCruise();
                        $sql = "select * from tour_offer";
                        $rows = $tourCruise->fetch($sql);
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_offer = $row['id_offer'];
                                $name_offer = $row['name_offer'];
                                $img_offer = $row['img_offer'];
                                $price_offer = $row['price_offer'];
                                $detail_offer = $row['detail_offer'];
                                $from_to_offer = $row['from_to_offer'];
                                echo "<div class='col-sm-6 col-md-6'>
                                    <div class='main-block cruise-block'>
                                        <div class='row'>
                                            <div class='col-sm-12 col-md-6 col-md-push-6 no-pd-l'>
                                                <div class='main-img cruise-img'>
                                                    <a>
                                                    <div data-toggle='modal' data-target='#myModalCruise$id_offer'><img src='images/$img_offer'class='img-responsive' alt='cruise-img'/></div>
                                                        <div class='cruise-mask'>
                                                            <p>7 Nights, 6 Days</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
    
                                            <div class='col-sm-12 col-md-6 col-md-pull-6 no-pd-r'>
                                                <div class='main-info cruise-info'>
                                                    <div class='main-title cruise-title'>
                                                        <a href='#'> $name_offer</a>
                                                        <p>From: $from_to_offer</p>
                                                        <div class='rating'>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star lightgrey'></i></span>
                                                        </div>
                                                        <span class='cruise-price'>$price_offer</span>
                                                    </div>
                                                    
                                                </div>
                                               
                                            </div>
        
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                
                                        ";
                            }
                        }
                        ?>
                        <!-- Modal cruise-->
                       
                        
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cruise-capitals -->

    <!--============== HIGHLIGHTS =============-->
  

    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscibe to receive our interesting updates</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Enter your email address" required />
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end newsletter-1 -->


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
                    <li><a href="blog.php">Blogs</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="contact.php">Contact</a></li>
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
    <!-- Page Scripts Ends -->

</body>

</html>