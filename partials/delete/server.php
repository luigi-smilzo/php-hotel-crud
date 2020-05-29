<?php
include_once __DIR__ . '/../database.php';

// Check ID existence
if ( empty($_POST['id']) ) {
    die('Errore');
}

// Query
$id_room = $_POST['id'];
$sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

// Redirect
if ( $result && $conn->affected_rows > 0 ) {
    header("Location: $base_path?del=$id_room");
} elseif ( $result ) {
    echo 'No room found';
} else {
    echo 'Error';
}

// Close connection
$conn->close();