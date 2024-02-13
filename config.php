<?php
$servername = "localhost"; 
$username = "viktor23001"; 
$password = "M3Ee1Z4m"; 
$database = "wp_viktor23001"; 


$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
