<?php 
  
require_once 'database/connect.php';
 if(isset($_POST['submit'])){
    $id =$_POST['account_id'];
    $name= $_POST['account_name'];
    $password= $_POST['account_pass'];
    $email= $_POST['account_email'];
    $Status=$_POST['account_status'];
    $result = mysqli_query($conn,$sua_sql);
    $capnhat_sql="UPDATE account SET account_name='$name', account_pass = '$password', account_email = '$email',account_status ='$Status' WHERE account_id=$id";
    header('location:display.php');
 }
 else{
   echo "thoi";
 }
?>