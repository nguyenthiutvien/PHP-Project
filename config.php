<?php

// Kết nối đến database
$servername = "localhost";
$username = "root";
$password ;
$dbname = "traveldana";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>