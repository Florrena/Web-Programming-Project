<?php
$servername = "localhost"; 
$username = "anna23021";
$password = "dMfcUNbs";
$dbname = "wp_anna23021";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>