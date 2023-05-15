<?php
require_once './database/connect.php';

$account_name= $_POST['name'];
$account_pass= $_POST['password'];
$account_email= $_POST['email'];
$account_status=$_POST['status'];

// include 'connect.php';
$themql="INSERT INTO account (account_name,account_pass,account_email,account_status) VALUES 
('$account_name','$account_pass','$account_email','$account_status')";
// echo $themql;exit;
//thực thi câu lệnh thêm
if(mysqli_query ($conn,$themql )
){
    // echo "<h1>Thêm Thành Công</h1>";
    //TRỞ về trang liệt kê
header('location:display.php');
}
?>