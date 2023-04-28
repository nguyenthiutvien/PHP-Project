<?php
$name= $_POST['name'];
$Description= $_POST['Description'];
$price= $_POST['price'];
$Departure=$_POST['Departure_point'];
$Destination=$_POST['Destination'];
$Type=$_POST['Type'];
$travel_time=$_POST['travel_time'];
$Status=$_POST['Status'];

require_once 'connect.php';
// include 'connect.php';
$themql="INSERT INTO Tour (name,Description,price,Departure_point,Destination,Type,travel_time,Status) VALUES 
('$name','$Description','$price','$Departure','$Destination','$Type','$travel_time','$Status')";
// echo $themql;exit;
//thực thi câu lệnh thêm
if(mysqli_query ($conn,$themql )
){
    // echo "<h1>Thêm Thành Công</h1>";
    //TRỞ về trang liệt kê
header('location:hienthi.php');
}
?>