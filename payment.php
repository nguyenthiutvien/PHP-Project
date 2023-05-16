<!doctype html>
<html lang="en">

<head>
    <title>STARTTRAVEL</title>
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
    <script src="js/index.js"></script>
    <style>
        .add {
            display: flex;
        }

        #home-links {
            margin: 0 0 0 300px;
            position: absolute;
            background-color: white;
        }
    </style>
</head>


<body id="main-homepage">

    <!--====== LOADER =====-->
   


    <!--======== SEARCH-OVERLAY =========-->
        <?php
        @include('header.php');
        $idd=$_GET['idd'];
        $total = 0;
        ?>
    <!-- end navbar -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

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
                        <a href="cruise-homepage.php" class="list-group-item">Cruise Homepage</a>
                        <a href="cruise-homepage.php" class="list-group-item">Harzadous Sports Tour Homepage</a>
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

                    <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cruise-links">
                        <a href="cruise-homepage.php" class="list-group-item">Tour Homepage</a>
                        <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                        <a href="holidays.php" class="list-group-item">Holidays</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cars-links">
                        <a href="cruise-homepage.php" class="list-group-item">Cruise Homepage</a>
                        <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                        <a href="holidays.php" class="list-group-item">Holidays</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="pages-links">
                        <div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                        <a href="about-us.php" class="list-group-item">About Us</a>
                        <a href="contact-us.php" class="list-group-item">Contact Us</a>
                        <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Listing Right Sidebar</a>
                        <a href="blog-detail-right-sidebar.php" class="list-group-item">Blog Detail Right Sidebar</a>
                        <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                        <a href="error-page.php" class="list-group-item">Dashboard</a>
                        <a href="error-page.php" class="list-group-item">User Profile</a>
                        <a href="error-page.php" class="list-group-item">Booking</a>
                        <a href="error-page.php" class="list-group-item">Wishlist</a>
                        <a href="error-page.php" class="list-group-item">Cards</a>

                        <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                        <a href="logout.php" class="list-group-item">Login</a>
                        <a href="registration.php" class="list-group-item">Registration</a>
                        <a href="forgot-password.php" class="list-group-item">Forgot Password</a>
                        <a href="error-page.php" class="list-group-item">404 Page</a>
                        <a href="#" class="list-group-item">Coming Soon</a>
                        <div class="list-group-heading list-group-item">Extra <span>Pages</span></div>
                        <a href="before-you-fly.php" class="list-group-item">Before Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel Insurance</a>
                        <a href="holidays.php" class="list-group-item">Holidays</a>
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

    <section class="innerpage-wrapper">
        <div id="login" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="flex-content">
                            <div class="custom-form custom-form-fields">
                                <h3>Payment</h3>
                                
                                <form method='POST' target='_blank' enctype='application/x-www-form-urlencoded' action="./paymentMomo.php?id=<?php
                                echo $idd
                                ?>">
                                
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6">
                                    <label>Name: </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" required />

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6">
                                    <label>Phone: </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Phone" required />

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-12">
                                    <label>Email: </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Email" name="Email" placeholder="Email" required />

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 ">
                                    <label>Address: </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" required />
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                    <label>Check In: </label>
                                        <div class="form-group left-icon">
                                            <input type="text" class="form-control dpd1" placeholder="Check In">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <!-- end columns -->
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                    <label>Check Out: </label>
                                        <div class="form-group left-icon">
                                            <input type="text" class="form-control dpd2" placeholder="Check Out">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <!-- end columns -->

                                    <!-- end row -->
                                    

                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                    <label>Adults: </label>
                                        <div class="form-group left-icon">
                                            <input type="number" class="form-control" id="Adults" name="Adults" placeholder="Adults" required />
                                        </div>
                                    </div>
                                    <?php
                                    $link = new mysqli("localhost", "root", "", "traveldana");
                                    $query = "select * from activity";
                                    $result = mysqli_query($link, $query);
                                    $query2 = "select * from account";
                                    $result2 = mysqli_query($link, $query2);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $name = $row['activity_name'];
                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                            $name2 = $row2['account_name'];
                                            if ($name == $name2) {
                                                $id = $row2['account_id'];
                                            }
                                        }
                                    }
                                    
                                   
                       
                                    $queryquery = "select * from cart where id_account='$id' and id_cart = '$idd'";
                                    $resultresult = mysqli_query($link, $queryquery);
                                    while ($rowrow = mysqli_fetch_assoc($resultresult)) {
                                        $idds = $rowrow['id_cart'];
                                        // $image = $rowrow['image_tour'];
                                        $name = $rowrow['name_tour'];
                                        $price = $rowrow['price_tour'];
                                        $from_to = $rowrow['from_to'];
                                        $status=$rowrow['status'];
                                        if($status=="checking in"){
                                            echo "<script>alert('Please wait for the admin to check !!!!!!')</script>";
                                            echo "<script>window.location.replace('cart.php')</script>";
                                        }
                                        else{
                                            $queryquery1 = "select * from cart where id_cart = '$idd'";
                                            $resultresult1 = mysqli_query($link, $queryquery1);
                                while ($rowrow1 = mysqli_fetch_assoc($resultresult1)) {
                                    $idd = $rowrow1['id_cart'];
                                    $id_account= $rowrow1['id_account'];
                                    $id_tour= $rowrow1['id_tour'];
                                    $image_tour= $rowrow1['image_tour'];
                                    $name_tour= $rowrow1['name_tour'];
                                    $price_tour= $rowrow1['price_tour'];
                                    $from_to= $rowrow1['from_to'];
                                    $status="Paied"; 
                                    $query3="insert into history(id_account,id_tour,image_tour,name_tour,price_tour,from_to,status) value ($id_account,$id_tour,'$image_tour','$name_tour',$price_tour,'$from_to','$status')";  
                                    mysqli_query($link,$query3);                         
                                }
                                        $total = $price;
                                        echo $inf_tuor = "
                                        <div class='col-xs-12 col-sm-12 col-md-5 col-lg-4'>
                                            <div class='form-group'>
                                            <label>Name_tour: </label>
                                                <input type='text' class='form-control' id='Name_tour' name='Name_tour' value = '$name' readonly >
                                            </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-12 col-md-5 col-lg-4'>
                                        <label>From-to: </label>
                                            <div class='form-group'>
                                                <input type='text' class='form-control' id='From_to' name='From_to' value = '$from_to' readonly>
                                            </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-12 col-md-5 col-lg-4'>
                                        <label>Price: </label>
                                            <div class='form-group'>
                                                <input type='text' class='form-control' id='Price_tour' name='Price_tour' value = '$price' readonly>
                                            </div>
                                        </div>
                                        ";
                                    }}

                                    ?>
                                    <div class="col-xs-4 col-sm-4 col-md-5 col-lg-4">
                                        <label></label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-5 col-lg-4">
                        
                                                <input  class='btn btn-success bt' type='submit' name='momo' value='PAY'>          
                                       
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-5 col-lg-4">
                                        <label></label>
                                    </div>
                                    
                            </div>

                            </form>
                            <!-- end other-links -->
                        </div>
                        <!-- end custom-form -->

                    </div>
                    <!-- end form-content -->

                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        </div>
        <!-- end login -->
    </section>
    <!-- end innerpage-wrapper -->

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
