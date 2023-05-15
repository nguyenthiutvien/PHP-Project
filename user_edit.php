<?php
//lấy id cần sửa

// echo $id;
require_once 'database/connect.php';
// Lấy dữ liệu từ form 
if(isset($_GET['id']))
{
    $id = $_GET['id']; 
    $sua_sql = "SELECT * FROM account WHERE account_id =$id";
    $result = mysqli_query($conn, $sua_sql);
    $row = mysqli_fetch_assoc($result);
}
   if(isset($_POST['submit'])){
      $id =$_POST['account_id'];
      $name= $_POST['account_name'];
      $password= $_POST['account_pass'];
      $email= $_POST['account_email'];
      $Status=$_POST['account_status'];
      $capnhat_sql="UPDATE account SET account_name='$name', account_pass = '$password', account_email = '$email',account_status ='$Status' WHERE account_id=$id";
      $query=mysqli_query($conn,$capnhat_sql);
      header('location:display.php');
   }
   
   
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
        <h1>EDIT ACCOUNT</h1>
        <form method="post">
            <input type="hidden" name="account_id" value="<?php echo $row['account_id'] ?>" >
            <div class="form-group">
                <label for="name" class="">Username</label>
                <input type="text" id="name" class="form-control" name="account_name" value="<?php echo $row['account_name'] ?>">
            </div>
            <div class="form-group">
                <label for="type">Password</label>
                <input type="type" id="pass" class="form-control" name="account_pass" value="<?php echo$row['account_pass'] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="account_email" class="form-control" value="<?php echo $row['account_email'] ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" id="status" name="account_status" class="form-control " value="<?php echo $row['account_status'] ?>">
            </div>
            <button name="submit" class="btn btn-primary">Account Update</button> 
        </form>
        <br>
        <a href="display.php" class="btn btn-info">Back</a>

    </div>

</body>

</html>