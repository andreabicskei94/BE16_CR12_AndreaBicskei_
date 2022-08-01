<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "be16_cr12_lacasamia_andrea" ;
            
$connect = new mysqli($hostname, $username, $password, $dbname);
            
// check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
    } /*else {
    echo "Connected successfully";
    } */
?>