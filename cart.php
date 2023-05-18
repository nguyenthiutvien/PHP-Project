<html>

<head>
    <title>Index HTML</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>

    <style type="text/css">
        td {
            vertical-align: middle;
        }

        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control {
                width: 20%;
                display: inline !important;
            }

            .actions .btn {
                width: 36%;
                margin: 1.5em 0;
            }

            .actions .btn-info {
                float: left;
            }

            .actions .btn-danger {
                float: right;
            }

            table#cart thead {
                display: none;
            }

            table#cart tbody td {
                display: block;
                padding: .6rem;
                min-width: 320px;
            }

            table#cart tbody tr td:first-child {
                background: #333;
                color: #fff;
            }

            table#cart tbody td:before {
                content: attr(data-th);
                font-weight: bold;
                display: inline-block;
                width: 8rem;
            }

            table#cart tfoot td {
                display: block;
            }

            table#cart tfoot td .btn {
                display: block;
            }
        }
    </style>
</head>

<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
<?php
@include('header.php')
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
                        <td><a href="history.php" class="btn btn-success btn-block">HISTORY <i class="fa fa-angle-right"></i></a>
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
                                            <td><img src='images/$image' height='200' width='250'></td>
                                            <td>$name</td>
                                            <td>$from_to</td>
                                            <td>$price</td>  
                                         
                                            <td><a href='payment.php?idd=$idd'><button type='button' class='btn btn-success bt'>PAY</button></a></td>           
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
                                            <td>$total</td>
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
</body>

</html>