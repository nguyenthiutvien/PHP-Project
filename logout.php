<?php
$link=new mysqli("localhost","root","","traveldana");
$query="delete from activity";
mysqli_query($link,$query);
header("location:login.php");
?>