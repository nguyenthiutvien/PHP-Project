


<!doctype html>
<html lang="en">

<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CPlayfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" id="cpswitch" href="./css/orange.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/comments.css">
    <link rel="stylesheet" href="./css/like.css">

</head>


<body>

<body id="main-homepage">



<?php
@include('header.php')
?>

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
            <!-- end list-group -->
        </div>
        <!-- end main-menu -->
    </div>

    <!-- end mySidenav -->
</div>
<!-- end sidenav-content -->



    <!--================= PAGE-COVER ================-->
    <section class="page-cover" id="cover-blog-listing">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Blog Listing Right Sidebar</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Blog Listing Right Sidebar</li>
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-cover -->


    <!--==== INNERPAGE-WRAPPER =====-->
    <section class="innerpage-wrapper">

        <div id="blog-listings" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                        <div class="space-right">

                        <?php
include("admin_set.php");



$blog = new blog();
$sql = "select * from blog";
$rows = $blog->fetch($sql);
if (!empty($rows)) {
    foreach ($rows as $row) {
        $id_blog = $row['id_blog'];
        $author_blog = $row['author_blog'];
        $time_blog = $row['time_blog'];
        $content_blog = $row['content_blog'];
        $title_blog = $row['title_blog'];
        $img_blog = $row['img_blog'];
        echo $table = "
            <div class='main-block blog-post blog-list'>
                <div class='main-img blog-post-img'>
                    <a href='blog-detail.php'>
                        <img src='images/$img_blog' class='img-responsive' alt='blog-post-image' />
                    </a>
                    <div class='main-mask'>
                        <ul class='list-inline list-unstyled blog-post-info'>
                            <li><span><i class='fa fa-calendar'></i></span>$time_blog</li>
                            <li><span><i class='fa fa-use'></i></span>By: <a href='#'>$author_blog</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end blog-post-img -->

                <div class='blog-post-detail'>
                    <h2 class='blog-post-title'><a href='blog-detail.php'>$title_blog</a></h2>
                    <p>$content_blog</p>
                    <div class='comments'></div>
                   
                     
                            
                     
            
                    
                </div>
                <!-- end blog-post-detail -->
            </div>
        ";
    }
}
?>


    <script>
    const write_comment_btns = document.querySelectorAll(".write_comment_btn");
    write_comment_btns.forEach(btn => {
        btn.addEventListener("click", function(event) {
            event.preventDefault();
            const id_blog = this.getAttribute("href").split("=")[1];
            window.location.href = "comments.php?id_blog=" + id_blog;
        });
    });
</script>



                          
                            <!-- end blog-post -->

                            <script>
                          
                            const comments_id_blog = <?php echo $id_blog; ?>;; // This number should be unique on every page
                            fetch("comments.php?id_blog=" + comments_id_blog).then(response => response.text()).then(data => {
                                document.querySelector(".comments").innerHTML = data;
                                document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
                                    element.onclick = event => {
                                        event.preventDefault();
                                        document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
                                        document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
                                        document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
                                    };
                                });
                                document.querySelectorAll(".comments .write_comment form").forEach(element => {
                                    element.onsubmit = event => {
                                        event.preventDefault();
                                        fetch("comments.php?id_blog=" + comments_id_blog, {
                                            method: 'POST',
                                            body: new FormData(element)
                                        }).then(response => response.text()).then(data => {
                                            element.parentElement.innerHTML = data;
                                        });
                                    };
                                });
                                });
                                </script>

                            
                      

                        </div>
                        <!-- end space-right -->
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">
                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block main-block ad-block">
                                    <div class="main-img ad-img">
                                        <a href="#">
                                            <img src="images/image20.png" class="img-responsive" alt="car-ad" />
                                            <div class="ad-mask">
                                                <div class="ad-text">
                                                    <span>Luxury</span>
                                                    <h2>Car</h2>
                                                    <span>Offer</span>
                                                </div>
                                                <!-- end ad-text -->
                                            </div>
                                            <!-- end columns -->
                                        </a>
                                    </div>
                                    <!-- end ad-img -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block instagram">
                                    <h2 class="side-bar-heading">Instagram</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li>
                                            <a href="#"><img src="images/cauvang.jpg" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/dalat.jpg" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/hagiang.png" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/danang.jpg" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/mykhe.jpg" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/nuiba.png" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/phocohoian.jpg" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/image20.png" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/chonoicairang.jpg" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block contact">
                                    <h2 class="side-bar-heading">Contact Us</h2>
                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-envelope"></i></span></div>
                                        <div class="text">
                                            <p>ntuv003@gmail.com</p>
                                        </div>
                                    </div>
                                    <!-- end c-list -->

                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-phone"></i></span></div>
                                        <div class="text">
                                            <p>039 888 3331</p>
                                        </div>
                                    </div>
                                    <!-- end c-list -->

                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-map-marker"></i></span></div>
                                        <div class="text">
                                            <p>Street No: To Hien Thanh, Son Tra, Da Nang, Viet Nam</p>
                                        </div>
                                    </div>
                                    <!-- end c-list -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block recent-post">
                                    <h2 class="side-bar-heading">Recent Post</h2>

                                    <div class="recent-block">
                                        <div class="recent-img">
                                            <a href="blog-detail-right-sidebar.php"><img src="images/phocohoian.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                        </div>
                                        <!-- end recent-img -->

                                        <div class="recent-text">
                                            <a href="blog-detail-right-sidebar.php">
                                                <h5>Host a Family Party</h5>
                                            </a>
                                            <span class="date">2 May, 2023</span>
                                        </div>
                                        <!-- end recent-text -->
                                    </div>
                                    <!-- end recent-block -->

                                    <div class="recent-block">
                                        <div class="recent-img">
                                            <a href="blog-detail-right-sidebar.php"><img src="images/mientay.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                        </div>
                                        <!-- end recent-img -->

                                        <div class="recent-text">
                                            <a href="blog-detail-right-sidebar.php">
                                                <h5>Host a Family Party</h5>
                                            </a>
                                            <span class="date">21 May, 2023</span>
                                        </div>
                                        <!-- end recent-text -->
                                    </div>
                                    <!-- end recent-block -->

                                    <div class="recent-block">
                                        <div class="recent-img">
                                            <a href="blog-detail-right-sidebar.php"><img src="images/phuyen.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                        </div>
                                        <!-- end recent-img -->

                                        <div class="recent-text">
                                            <a href="blog-detail-right-sidebar.php">
                                                <h5>Host a Family Party</h5>
                                            </a>
                                            <span class="date">27 May, 2023</span>
                                        </div>
                                        <!-- end recent-text -->
                                    </div>
                                    <!-- end recent-block -->

                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block follow-us">
                                    <h2 class="side-bar-heading">Follow Us</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="https://www.facebook.com"><span><i class="fa fa-facebook"></i></span></a></li>
                                        <li><a href="https://www.twitter.com"><span><i class="fa fa-twitter"></i></span></a></li>
                                        <li><a href="https://istagram.com"><span><i class="fa fa-linkedin"></i></span></a></li>
                                        <li><a href="https://www.google.com"><span><i class="fa fa-google-plus"></i></span></a></li>
                                        <li><a href="https://pinterest.com"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                    </ul>
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block tags">
                                    <h2 class="side-bar-heading">Tags</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="#" class="btn btn-g-border">SPA</a></li>
                                        <li><a href="#" class="btn btn-g-border">Restaurant</a></li>
                                        <li><a href="#" class="btn btn-g-border">Searvices</a></li>
                                        <li><a href="#" class="btn btn-g-border">Wifi</a></li>
                                        <li><a href="#" class="btn btn-g-border">Tv</a></li>
                                        <li><a href="#" class="btn btn-g-border">Rooms</a></li>
                                        <li><a href="#" class="btn btn-g-border">Pools</a></li>
                                        <li><a href="#" class="btn btn-g-border">Work</a></li>
                                        <li><a href="#" class="btn btn-g-border">Sports</a></li>
                                    </ul>
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end columns -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end blog-listings -->
    </section>
    <!-- end innerpage-wrapper -->


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Best Price Guarantee</h3>
                        <p>Our website brings you the best experiences and services with the most standard price. Our services are approved a resolution by Vietnam Travel Branch.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>Safe and Secure</h3>
                        <p>All your personal informations, supported informations will be kept and secured in the best way. Only you and administrators can know. Your informations never have leaked out and lost.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Best Travel Agents</h3>
                        <p>We have related to the best Travel agency in Vietnam. Supported and admitted by many branches, we have been improving and broading our activities.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Travel Guidelines</h3>
                        <p>All your questions will be replied by administrators and they will help you. We're always side by side and help you about any problems.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end best-features -->


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
    <script src="js/like.js"></script>
    <!-- Page Scripts Ends -->
</body>
</html>