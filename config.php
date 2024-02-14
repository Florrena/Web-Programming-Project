<?php
$servername = "localhost"; 
$username = "viktor23001"; 
$password = "M3Ee1Z4m"; 
$database = "wp_viktor23001"; 


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->conn_error) {
    die("Connection failed: " . $conn->conn_error);
}
?>
