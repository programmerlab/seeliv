<?php
$servername = "localhost";
$username = "appentus_sch";
$password = "sch@123";
$db="appentus_sch";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>