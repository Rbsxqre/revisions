

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Tech4U</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Tech4U</h1>
    <p>Your website is successfully connected to the database!</p>
</div>

</body>
</html>