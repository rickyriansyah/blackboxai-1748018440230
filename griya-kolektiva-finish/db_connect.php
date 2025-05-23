<?php
// Database connection settings
$host = 'localhost';
$dbname = 'griya_kolektiva';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Set charset to utf8mb4 for proper encoding
$conn->set_charset('utf8mb4');
?>
