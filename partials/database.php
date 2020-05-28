<?php 
include __DIR__ . '/../env.php';

// Database connection
$conn = new mysqli($server, $user, $password, $dbName);

// Connection check
if ($conn && $conn->connect_error) {
    die('Error');
}