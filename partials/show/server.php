<?php 
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

// Room ID
$id_room = $_GET['id'];

// Get room by ID
$room = getById($conn, 'stanze', $id_room);