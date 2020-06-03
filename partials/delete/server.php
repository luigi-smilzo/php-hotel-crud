<?php
include_once __DIR__ . '/../database.php';
include_once __DIR__ . '/../functions.php';

// Check ID existence
if ( empty($_POST['id']) ) {
    die('Errore');
}
 // Get ID and redirect URL
$id_room = $_POST['id'];
$url = "$base_path?del=success";

// Delete room by ID
deleteById($conn, 'stanze', $id_room, $url);
