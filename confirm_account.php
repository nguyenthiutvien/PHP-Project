<?php
ini_set("display_errors",0);
$id=$_GET['id'];
echo $id;
$link=new mysqli("localhost","root","","traveldana");
$status="Being active";
$query="update account set account_status='$status' where account_id='$id'";
mysqli_query($link,$query);
use PHPMailer\PHPMailer\PHPMailer;
ini_set("display_errors",0);

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer();
$email=$_GET['email'];
$alert = '';
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'xtai0781@gmail.com'; 
    $mail->Password = 'jaeechnvfbzmpsko';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->setFrom('xtai0781@gmail.com', 'Admin');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = "TRAVELDANA'S CONFIRMATION";
    $mail->Body = "YOUR ACCOUNT HAS BEEN CONFIRMED</h3>";

    $mail->send();
    $alert = '<div class="alert-success"> 
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }                                                   

  header("location: admin.php");                                                                                               
?>