<?php
$id=$_GET['id'];
// echo $id;
require_once 'connect.php';
$xoa_sql="DELETE FROM tour WHERE id=$id";
mysqli_query($conn,$xoa_sql);
// echo "<h1>ĐÃ XÓA THÀNH CÔNG</h1>"
//TRỞ về trang liệt kê
header('location:hienthi.php');
?>