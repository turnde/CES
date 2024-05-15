<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'turnde';
$dbPassword = 'e79w81gF0ssKlwG';
$dbName = 'ces';

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>