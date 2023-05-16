<!doctype html>
<html lang="en">

<head>
    <title>Forgot Password</title>
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
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>


<body>




    <!--======== SEARCH-OVERLAY =========-->
    <?php
   @include('header.php');
   ?>

    <!--================== PAGE-COVER ==================-->
    <section class="page-cover" id="cover-forgot-password">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Forgot Password Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Forgot Password Page</li>
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-cover -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['register2'])){
ini_set("display_errors",0);
$user=$_POST['user'];
$email=$_POST['email'];
$kt=0;
$link=new mysqli("localhost","root","","traveldana");
$query="select * from account";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)){
while($row=mysqli_fetch_assoc($result)){
    if (($user==$row['account_name'])&&($email==$row['account_email'])){
        $kt=1;
        $pass=$row['account_pass'];
        require_once 'PHPMailer/Exception.php';
        require_once 'PHPMailer/PHPMailer.php';
        require_once 'PHPMailer/SMTP.php';
        
        $mail = new PHPMailer();
        $email=$row['account_email'];
        $alert = '';
        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'xtai0781@gmail.com'; 
            $mail->Password = 'jaeechnvfbzmpsko';
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";
        
            $mail->setFrom('xtai0781@gmail.com', 'Admin');
            $mail->addAddress($email);
        
            $mail->isHTML(true);
            $mail->Subject = "FOR-GOT PASSWORD";
            $mail->Body = "USERNAME: $user   PASSWORD: $pass</h3>";
        
            $mail->send();
            $alert = '<div class="alert-success"> 
                         <span>Message Sent! Thank you for contacting us.</span>
                        </div>';
          } catch (Exception $e){
            $alert = '<div class="alert-error">
                        <span>'.$e->getMessage().'</span>
                      </div>';
          }        
    }
}
if($kt==0){
    echo "<script>alert('THE USERNAME OR EMAIL DOES NOT EXIST !!!')</script>";
}else{
    echo "<script>alert('PLEASE CHECK PASSWORD IN YOUR EMAIL !!!')</script>";
}
}}
?>
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="forgot-password" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="flex-content">
                            <div class="custom-form custom-form-fields">
                                <h3>Forgot Password</h3>
                                <p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your User Name" id="user" name="user" required/>
                                        <span><i class="fa fa-user"></i></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Email" id="email" name="email" required/>
                                        <span><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="submit" class="btn btn-orange btn-block" id="register" placeholder="Register" name="register2">
                                </form>
                              
                                <div class="other-links">
                                    <p class="link-line">Already Have An Account ? <a href="login.php">Login Here</a></p>
                                    <p class="link-line">New Here ? <a href="registration.php">Join Us</a></p>
                                </div>
                                <!-- end other-links -->
                            </div>
                            <!-- end custom-form -->

                            <div class="flex-content-img custom-form-img">
                                <img src="images/ve-dep-viet-nam-vnexpress-2-1584434502.jpg" class="img-responsive" alt="registration-img" />
                            </div>
                            <!-- end custom-form-img -->
                        </div>
                        <!-- end form-content -->

                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end forgot-password -->
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
                                <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
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
    <?php
   @include('footer.php');
   ?>
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
    <!-- Page Scripts Ends -->
</body>

</html>