<?php
    $name= $_POST['name'];
    $Description= $_POST['Description'];
    $price= $_POST['price'];
    $Departure=$_POST['Departure'];
    $Destination=$_POST['Destination'];
    $Type=$_POST['Type'];
    $travel_time=$_POST['travel_time'];
    $Status=$_POST['Status'];
    $id=$_POST['id'];
require_once 'connect.php';
// include 'connect.php';
    $capnhat_sql="UPDATE  tour SET Name='$name',Description='$Description'
    ,price='$price',Departure_point='$Departure',Destination='$Destination',
    Type='$Type',travel_time='$travel_time'
    ,Status='$Status' WHERE id=$id";

    // echo $capnhat_sql;exit;
    //thực thi câu lệnh thêm
    if(mysqli_query ($conn,$capnhat_sql)
    ){
        // echo "<h1>Thêm Thành Công</h1>";
        //TRỞ về trang liệt kê
    header('location:hienthi.php');
    }
?>