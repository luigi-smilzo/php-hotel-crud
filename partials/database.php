<?php 
include __DIR__ . '/../env.php';

$conn = new mysqli($server, $user, $password, $dbName);

if ($conn && $conn->connect_error) {
    die('Error');
}

echo 'ok';