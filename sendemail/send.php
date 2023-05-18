<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';
require './phpmailer/src/Exception.php';

require './vendor/autoload.php';

if(isset($_POST["btn"])){
    $email = $_POST['email'];
    $pass = rand(100000, 999999);

    $mail = new PHPMailer(true);
                    // Configure an SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'xtai0781@gmail.com';
    $mail->Password = 'jaeechnvfbzmpsko';
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPDebug = 0;
    $mail->Port = 465;

    $mail->setFrom('xtai0781@gmail.com');

    $mail->addAddress($email);

    $mail->isHTML(true);

    $mail->Subject = "Your password";
    $mail->Body = "Here is your password: " . $pass;
    $mail->send();

    $mail->send();

    include "connect.php";
        if (isset($_POST['btn'])) {
            if($_POST['email'] != null){
                $email = ($_POST["email"]);
                $dt = "SELECT * FROM  account where account_email='$email' ";
                $ms=mysqli_query($conn,$dt);
                $dem =mysqli_num_rows($ms);
                if($dem>0){
                    echo "<script> alert('successful login!') </script>";
                }
                else{
                    echo "<script> alert('Email does not exist_Please re-enter!') </script>";
                }
            }
        }
}

?>