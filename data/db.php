<?php
$host = "tech4u"; // Example: "mysql.hostinger.com"
$user = "tech4u";
$pass = "tech4uNuloof";
$dbname = "u783231124_tech4u";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
