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

$sql = "UPDATE `stanze`
SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at` = NOW()
WHERE `id` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iiii', $room_number, $beds, $floor, $id_room);
$stmt->execute();

// Redirect
if ( $stmt && $stmt->affected_rows > 0 ) {
    header("Location: $base_path" . "show.php?id=$id_room");
} elseif ( $stmt ) {
    die('Error');
} else {
    die('Error');
}

// Close connection
$conn->close();