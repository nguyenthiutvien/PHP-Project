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
     <link rel="stylesheet" href="insurance.css">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/insurance.css">
    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/admin.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

<body>
    <div id="main-homepage">
    <!--====== LOADER =====-->
    <!-- <div class="loader">

    </div> -->
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
                <!-- end links -->
            </div>
            <!-- end columns -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
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
                <a href="index.php" class="navbar-brand"><span><img style = "width=30px; height: 40px"src="./images/logo1.png" alt=""></span> <span style="color:#DD761E"> TRAVEL</span><span style="color:#2F98B9">DANA</a>
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
                            <li><a href="./sendemail/vendor/forgot password.php">Forgot Password Homepage</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                </ul>
            </div>
            <!-- end navbar collapse -->
        </div>
    <ul class="list-inline">
    <ul class="list-inline">
  </head>
  </div> <br><br>
<!--  -->
    <div class="container-admin">
        <div class="row">
            <div class="col-lg-3 bg-info text-white"  style="height:800px">
                <h2 style="font-size:40px">Hello Admin </h2>
                <div class="menu">


                    <div class="user" style="padding-left:80px"><br><br>
                    <svg   xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                    </svg>
                        <a href="#" style="list-style:none;font-size:30px">User</a>  
                    </div>
                    <br>
                    <br>
                    
                    <div class="admin" style="padding-left:80px">
                       <span  style="list-style:none;font-size:30px;margin-top:40px">TravelDana</span>   
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="container">
                    
                    <!-- <a href="input.php" class="btn btn-success">Add Tour</a> -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">New Tour New</button>
                    <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Hello</h4>
                    </div>
                    <div class="modal-body">
                    <form method="post" class="form-form" action="them.php" enctype="multipart/form-data" > <br>
                            
                                                <!-- <input type="hidden" name="action" value="add"> Trường ẩn để xác định hành động -->
                                        <!-- <input type="hidden" name="id" value="<?php echo $row['id']; ?>"> -->
                                        <label for="name" class="title-title">Name:</label>
                                        <input type="text" class="input-btn" name="name"><br><br>
                                        
                                        <label for="text" class="title-title">Description:</label>
                                        <input type="text"  style="color:white;"  class="input-btn" name="Description" ><br><br>
                                        
                                        <label for="number" class="title-title">Price:</label>
                                        <input type="float" class="input-btn" name="price" ><br><br>

                                        <label for="Departure_point" class="title-title">Departure_point:</label>
                                        <input name="Departure_point" type="text" class="input-btn" ><br> <br>

                                        <label for="Destination" class="title-title">Destination:</label>
                                        <input name="Destination" type="text" class="input-btn" ><br> <br>

                                        <label for="Type"  class="title-title">Type:</label>
                                        <input name="Type"style="color:white;" type="text" class="input-btn" ><br> <br>
                                        
                                        <label for="time" class="title-title">travel_time:</label>
                                        <input type="time" class="input-btn" name="travel_time"><br><br>

                                        <label for="text" class="title-title">Status:</label>
                                        <input type="text" class="input-btn" name="Status"><br><br>

                                        <button type="submit" class="btn btn-primary">Add New Tour</button>

                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                    <br><br>
                    
                    <table class="table">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>ID</th>
                                <th>Name </th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Departure_point</th>
                                <th>Destination</th>
                                <th>Type</th>
                                <th>travel_time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //kết nối
                            require_once 'connect.php';
                            //câu lệnh
                            $lietke_sql="SELECT * FROM Tour order by name,price,Departure_point";
                            //thực thi câu lệnh
                            $result=mysqli_query($conn,$lietke_sql);
                            //duyệt qua result và in ra
                            while($r=mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?php echo $r['id'];?></td>
                                    <td><?php echo $r['Name'];?></td>
                                    <td><?php echo $r['Description'];?></td>
                                    <td><?php echo $r['Price'];?></td>
                                    <td><?php echo $r['Departure_point'];?></td>
                                    <td><?php echo $r['Destination'];?></td>
                                    <td><?php echo $r['Type'];?></td>
                                    <td><?php echo $r['travel_time'];?></td>
                                    <td><?php echo $r['Status'];?></td>

                                    <td><a onclick="return confirm('Are you sure you want to corect this information');" href="sua.php?id=<?php echo $r['id']?>" class="btn btn-warning">Sửa</a>
                                    <a onclick="return confirm('Are you sure you want to delete?');"  href="xoa.php?id=<?php echo $r['id']?>" class="btn btn-danger">Xoá</a></td></a>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
</body>
</html>
            