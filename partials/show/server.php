<?php 
include __DIR__ . '/../database.php';

// Room ID
$id_room = $_GET['id'];

// Query
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

// Fetching results...
if ( $result && $result->num_rows > 0 ) {
    $room = $result->fetch_assoc();
} elseif ( $result ) {
    echo 'No results';
} else {
    echo 'Error';
}

// Closing connection
$conn->close();