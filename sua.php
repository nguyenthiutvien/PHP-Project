<?php
    //lấy id cần sửa
    $id=$_GET['id'];
    require_once 'connect.php';
    $sua_sql="SELECT * FROM tour WHERE id=$id";
    $result= mysqli_query($conn,$sua_sql);
    $row=mysqli_fetch_assoc($result);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sinh viên</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>ADD NEW TOUR</h1>
        <form action="capnhat.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>" id="">
            <div class="form-group">
                <label for="hoten" class="">ID</label>
                <input type="text" id="hoten" class="form-control" name="id" value="<?php echo $row['id'] ?>">
            </div>
            <div class="form-group">
                <label for="hoten" class="">Name</label>
                <input type="text" id="hoten" class="form-control" name="name" value="<?php echo $row['Name'] ?>">
            </div>
            <div class="form-group">
                <label for="Description" >Description</label>
                <input type="text" id="Description" class="form-control" name="Description" value="<?php echo $row['Description'] ?>"
            </div>
            <div class="form-group">
                <label for="price" >Price</label>
                <input type="text" id="Price" name="price" class="form-control" value="<?php echo $row['Price'] ?>" 
            </div>
            <div class="form-group">
                <label for="Departure" >Departure_point</label>
                <input type="text" id="Departure" name="Departure" class="form-control "  value="<?php echo $row['Departure_point'] ?>" 
            </div>
            <div class="form-group">
                <label for="Destination" >Destination</label>
                <input type="text" id="Destination" name="Destination" class="form-control " value="<?php echo $row['Destination'] ?>" 
            </div>
            <div class="form-group">
                <label for="Type" >Type</label>
                <input type="text" id="Type" name="Type" class="form-control "  value="<?php echo $row['Type'] ?>"
            </div>
            <div class="form-group">
                <label for="travel_time" >travel_time</label>
                <input type="text" id="travel_time" name="travel_time" class="form-control " value="<?php echo $row['travel_time'] ?>"
            </div>
            <div class="form-group">
                <label for="Status" >Status</label>
                <input type="text" id="Status" name="Status" class="form-control " value="<?php echo $row['Status'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Tour Update</button>
        </form>
    </div>
</body>
</html>