<?php
$host = "localhost"; // Change this based on your Hostinger database details
$dbname = "u783231124_tech4u"; // Your Hostinger database name
$username = "u783231124_tech4u"; // Your Hostinger database username
$password = "tech4uNuloof"; // Change this to your actual Hostinger database password

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
