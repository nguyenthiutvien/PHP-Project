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
    <!-- <script src="js/index.js"></script> -->
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

  <!--===== INNERPAGE-WRAPPER ====-->
  <section class="page-cover" id="cover-contact-us">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="page-title">Contact Us</h1>
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact Us Page</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--===== INNERPAGE-WRAPPER ====-->
  <section class="innerpage-wrapper">
    <div id="contact-us" class="innerpage-section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-5 no-pd-r">
            <div class="custom-form contact-form">
              <h3>Contact Us</h3>
              <p>Welcome to Starttravel. Your informations will be secured carefully. Please fill informations fully. Contact us if you get any problems.</p>
              <form method="POST" action="">
                <div class="form-group">
<input type="text" class="form-control" placeholder="Name" required name="user"/>
                  <span><i class="fa fa-user"></i></span>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" required  name="email"/>
                  <span><i class="fa fa-envelope"></i></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject" required name="subject"/>
                    <span><i class="fa fa-info-circle"></i></span>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="4" placeholder="Your Message" name="message"></textarea>
                  <span><i class="fa fa-pencil"></i></span>
                </div>
                <button type="send" class="btn btn-orange btn-block" name="send">Send</button>
              </form>
            </div>
          </div>
          <div class="col-sm-12 col-md-7 no-pd-l">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5422.217680878009!2d108.24220260953769!3d16.06098018315957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f2ced6d8b%3A0xe282c779264f7088!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIE5naOG7gSDEkMOgIE7hurVuZw!5e0!3m2!1svi!2skr!4v1611308637342!5m2!1svi!2skr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- <?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      include './phpmailer/src/Exception.php';
      include './phpmailer/src/PHPMailer.php';
      include './phpmailer/src/SMTP.php';

      require './vendor/autoload.php';

      if(isset($_POST['send'])){


        $email = $_POST['email'];

        try {
            $mail = new PHPMailer(true);
            //Server settings

            $mail->isSMTP();                         
            $mail->Host       = 'smtp.gmail.com';  
            $mail->SMTPDebug = 0;                
            $mail->SMTPAuth   = true;                           
            $mail->Username   = 'loanthi3703@gmail.com';
            $mail->Password   = 'rfxzjftlrpsntizv';          
            $mail->SMTPSecure = 'ssl';    
            $mail->Port       = 465;                                
            $mail->setFrom('loanthi3703@gmail.com');
            $mail->addAddress($email);   

            //Content
            $mail->isHTML(true);                                
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'thank you for comment ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
echo "<script>alert('Message has been sent')</script>";
            } catch (Exception $e) {
              echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
            }
            }
  ?>

<?php

  if (isset($_POST["send"])) {
    $ketnoi = mysqli_connect("localhost", "root", "", "tour");
    $name = $_POST["user"];
    $email = $_POST["email"];
    $sbj = $_POST["subject"];
    $mess = $_POST["message"];

    // Kiểm tra xem email đã tồn tại trong bảng chưa
    $check_email_query = "SELECT * FROM contact WHERE email='$email'";
    $result = mysqli_query($ketnoi, $check_email_query);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
        //Email đã tồn tại, xử lý lỗi hoặc hiển thị thông báo cho người dùng
        echo "<script>alert('This email already exists in our database. Please enter another email.')</script>";
    } else {
        // Email không tồn tại, hãy chèn dữ liệu mới vào bảng
        $insert_query = "INSERT INTO contact (name, email, subject, feedback) VALUES ('$name', '$email', '$sbj', '$mess')";
        $result = mysqli_query($ketnoi, $insert_query);
        echo "<script>alert('Your data has been sent successfully.')</script>";
    }
    mysqli_close($ketnoi);
}
?>

 -->

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
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="b-feature-block">
            <span><i class="fa fa-lock"></i></span>
            <h3>Safe and Secure</h3>
            <p>All your personal informations, supported informations will be kept and secured in the best way. Only you and administrators can know. Your informations never have leaked out and lost.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="b-feature-block">
            <span><i class="fa fa-thumbs-up"></i></span>
            <h3>Best Travel Agents</h3>
            <p>We have related to the best Travel agency in Vietnam. Supported and admitted by many branches, we have been improving and broading our activities.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="b-feature-block">
            <span><i class="fa fa-bars"></i></span>
            <h3>Travel Guidelines</h3>
            <p>All your questions will be replied by administrators and they will help you. We're always side by side and help you about any problems.</p>
          </div>
        </div>

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
</body>
</html