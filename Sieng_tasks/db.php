<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "sieng23000";     // Replace with your MySQL username
$password = "xM2t1Q8a";     // Replace with your MySQL password
$dbname = "wp_sieng23000";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>