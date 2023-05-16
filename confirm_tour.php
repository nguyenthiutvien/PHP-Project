<?php
ini_set("display_errors",0);
$id=$_GET['id'];
echo $id;
$idd=$_GET['id_account'];
$link=new mysqli("localhost","root","","traveldana");
$status="Confirmed";
$query="update cart set status='$status' where id_cart='$id'";
mysqli_query($link,$query);
$query2="select * from account";
$result=mysqli_query($link,$query2);
while($row=mysqli_fetch_assoc($result)){
    if ($row['account_id']==$idd){
        $mail2=$row['account_email'];
    }
}
use PHPMailer\PHPMailer\PHPMailer;
ini_set("display_errors",0);

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
$mail = new PHPMailer();
$email=$mail2;
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
    $mail->Body = "YOUR TOUR HAS BEEN CONFIRMED</h3>";

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