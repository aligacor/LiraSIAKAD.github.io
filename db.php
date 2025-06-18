<?php
$host = "localhost";
$user = "root";
$pass = ""; // or your password
$db   = "school";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
