<?php 
include_once __DIR__ . '/../database.php';

// Check ID presence
if ( empty($_POST['id']) ) {
    die('Errore');
}

// Query
$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

$sql = "UPDATE `stanze` SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor WHERE `id` = $id_room";
$result = $conn->query($sql);

// Redirect
if ( $result && $conn->affected_rows > 0 ) {
    header("Location: $base_path/show.php?id=$id_room");
} elseif ( $result ) {
    die('Error');
} else {
    die('Error');
}

// Close connection
$conn->close();