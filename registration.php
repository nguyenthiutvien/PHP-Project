<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        #number {
            display: none;
        }
        
        #submit {
            display: none;
        }
        #submit2 {
            display: none;
        }
    </style>
      <script type="text/javascript">
      function show2(){
        document.getElementById("submit").style.display = "none";
        document.getElementById("submit2").style.display = "block";
      }
          function show() {
            var user = document.getElementById('user').value;
    var email = document.getElementById('email').value;
    var pass = document.getElementById('pass').value;
    var repass = document.getElementById('repass').value;
    if (user.length < 3) {
        alert("Username must contain at least 3 characters!");
        document.SignIn.user.focus();
    } else if (pass.length == 0) {
        alert("Password cannot be empty!");
        document.SignIn.pass.focus();
    } else if (pass != repass) {
        alert(" Password must match!");
        document.SignIn.pass.focus();
    } else if (email.length == 0) {
        alert("Wrong mail format!");
        document.SignIn.email.focus();
    } else {
        document.getElementById("number").style.display = "block";
    document.getElementById("register").style.display = "none";
    document.getElementById("submit").style.display = "block";
        }
    }
    var code;
    $(document).ready(function(){
    $('#register').click(function(){
        var txt= $('#email').val();
        alert("Please check the erification code !!!");
        $.post('sendmail.php',{data: txt},function(data){
         code=data;
        })
    })
    $('#submit2').click(function(){
            alert("Please wait for the admin to confirm !!!");
})
    $('#submit').click(function(){
        var code2= $('#number').val();
        if(code==code2){
            alert("Enter the code successfully. Please submit information!!!");
            show2();
}
        else{
alert("The verification code is wrong. Please re-enter !!!");
document.SignIn.user.focus();
        }
    })
})
    </script>
</head>


<body>
<?php
             include ('sign_up.php');
             if(isset($_POST['submit2'])){
         //    if(isset($_POST['submit'])){
                $account=new account();
            $account->create();}
//}
            ?>
    <!--====== LOADER =====-->
    <!--======== SEARCH-OVERLAY =========-->
<?php
@include("header")
?>
    <!-- end sidenav-content -->


    <!--================ PAGE-COVER =================-->
    <section class="page-cover" id="cover-registration">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Registration Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Registration Page</li>
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-cover -->
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="registration" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="flex-content">
                            <div class="custom-form custom-form-fields">
                                <h3>Registration</h3>
                                <p>Welcome to Starttravel. Your informations will be secured carefully. Please fill informations fully. Contact us if you get any problems.</p>
                                <form action="" method="post">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" id="user" name="account_name" value =""required/>
                                        <span><i class="fa fa-user"></i></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" id="email" name="account_email" required/>
                                        <span><i class="fa fa-envelope"></i></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" id="pass" name="account_pass" required/>
                                        <span><i class="fa fa-lock"></i></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" id="repass" placeholder="Confirm Password" name="account_confirm" required/>
                                        <span><i class="fa fa-lock"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="number" placeholder="Codes" />
                                    </div>
                                    <input type="button" class="btn btn-orange btn-block" id="register" name="register" value="Register"  onclick="<?php
               echo 'show();';
           ?>">
                                    <input type="button" class="btn btn-orange btn-block" id="submit" name="submit" value="Check Code" >
                                    <input type="submit" class="btn btn-orange btn-block" id="submit2" name="submit2" value="Submit">
                                </form>

                                <div class="other-links">
                                    <p class="link-line">Already Have An Account ? <a href="login.php">Login Here</a></p>
                                </div>
                                <!-- end other-links -->
                            </div>
                            <!-- end custom-form -->

                            <div class="flex-content-img custom-form-img">
                                <img src="images/danang.jpg" class="img-responsive" alt="registration-img" />
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
        <!-- end registration -->
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