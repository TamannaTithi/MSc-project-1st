<?php
$servername = "localhost";
$user = "root";
$password = "";
$database = "db";

// Create connection
$conn = mysqli_connect($servername , $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
}
echo "Connected successfully";
?>

