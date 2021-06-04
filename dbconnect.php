<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Dhealth";
$db_port = 8889;

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} 
?>