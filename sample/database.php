<?php
$hostName   = "localhost";
$dbUser     = "root";
$dbPassword = "";
$dbName     = "sample_db";

//create connection
$conn = new mysqli($hostName, $dbUser, $dbPassword, $dbName);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>