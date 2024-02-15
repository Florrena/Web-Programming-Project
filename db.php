<?php
$servername = "localhost"; 
$username = "bbcap23_1";
$password = "iX8vxgiX";
$dbname = "wp_bbcap23_1";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>