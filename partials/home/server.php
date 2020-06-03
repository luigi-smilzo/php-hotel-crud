<?php 
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

// Get all rooms
$rooms = getAll($conn, 'stanze');