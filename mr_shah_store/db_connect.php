<?php
// Database connection file

$host = "localhost";
$user = "root";
$password = "";
$dbname = "mr_shah_store";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
