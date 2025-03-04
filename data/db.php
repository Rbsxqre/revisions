<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$host = "green-narwhal-272927.hostingersite.com"; // Your Hostinger MySQL host
$user = "u783231124_tech4u"; // Your MySQL username
$pass = "tech4uNuloof"; // Replace with your actual password
$dbname = "u783231124_tech4u"; // Your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
?>
