<?php
$id=$_GET['id'];
// echo $id;
require_once 'database/connect.php';
$xoa_sql="DELETE FROM account WHERE account_id=$id";
mysqli_query($conn,$xoa_sql);
// echo "<h1>ĐÃ XÓA THÀNH CÔNG</h1>"
//TRỞ về trang liệt kê
header('location:display.php');
?>