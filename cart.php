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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" id="cpswitch" href="./css/orange.css">
    <link rel="stylesheet" href="./css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="./css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="./css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <!-- <script src="js/index.js"></script> -->
 
</head>


<body id="main-homepage">

    <!--====== LOADER =====-->
    <!-- <div class="loader"></div> -->


    <!--======== SEARCH-OVERLAY =========-->
    <?php
   @include('header.php');
   ?>
    <!--================= PAGE-COVER ================-->
    <section class="page-cover" id="cover-byf-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Cart</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">My Cart</li>
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- end page-cover -->
    <h1 class="text-center"><b>MY CART</b></h1>
    <div class="container">
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>

                    <tr>
                        <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> CONTINUE BUYING</a>
                        </td>
                        <th style="width:15%"><b></b></th>
                        <th style="width:15%"><b></b></th>
                        <th style="width:15%"><b></b></th>
                        <th style="width:200%"><b></b></th>
                        <td class="hidden-xs text-center"></strong>
                        </td>
                        <td><a href="#" class="btn btn-success btn-block">HISTORY <i class="fa fa-angle-right"></i></a>
                        </td>
                    </tr>
                </thead>
            </table>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>IMAGE</th>
                            <th>NAME</th>
                            <th>FROM_TO</th>
                            <th>PRICE</th>
                            <th>PAY</th>
                            <th>TOOL</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
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
                        $total = 0;
                        $queryquery = "select * from cart where id_account='$id'";
                        $resultresult = mysqli_query($link, $queryquery);
                        while ($rowrow = mysqli_fetch_assoc($resultresult)) {
                            $idd = $rowrow['id_cart'];
                            $image = $rowrow['image_tour'];
                            $name = $rowrow['name_tour'];
                            $price = $rowrow['price_tour'];
                            $from_to = $rowrow['from_to'];
                            $total = $total + $price;
                            echo $table = "
                                        <tr>
                                            <td><img src='images/$image' height='100' width='150'></td>
                                            <td>$name</td>
                                            <td>$from_to</td>
                                            <td>$price $</td>  
                                            <td><a href='#'><button type='button' class='btn btn-success bt'>PAY</button></a></td>           
                                            <td><a href='delete_cart.php?idd=$idd'><button type='button' class='btn btn-success bt'>DELETE</button></a></td>
                                        </tr>
                                        ";
                        }
                        echo $table2 = "
                                    <tr>
                                            <td>TOTAL</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>             
                                            <td>$total $</td>
                                        </tr>
                                    ";
                        ?>
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
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