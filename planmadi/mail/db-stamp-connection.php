<?php
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "techvito_WPZFI"; // Replace with your MySQL username
$password = "QQ8P{%YOIpMdq)TN-"; // Replace with your MySQL password
$dbname = "techvito_WPZFI"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
