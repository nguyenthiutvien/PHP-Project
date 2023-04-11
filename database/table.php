<?php

$link="CREATE TABLE users (
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";
?>

<?php
$mysqli = mysqli_connect("localhost","root","","travelDana");

if ($mysqli == false){
   die("ERROR: Could not connect.".mysqli_connect_error());
}


if ($mysqli->query($link)==true){
   echo "Table created successfully.";
}
else{
   echo"ERROR: Could not able to execute $link.". $mysqli->error;
}

$mysqli->close();
?>