<?php
$host = "green-narwhal-272927.hostingersite.com"; 
$dbname = "u783231124_tech4u";
$username = "u783231124_tech4u";
$password = "tech4uNuloof"; // Change this immediately for security

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
