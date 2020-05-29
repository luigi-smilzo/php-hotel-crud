<?php 
include __DIR__ . '/../database.php';

// Check ID presence
if ( !empty($_GET['id']) ) {
    $id_room = $_GET['id'];

    // Query
    $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
    $result = $conn->query($sql);

    // Fetching results...
    if ( $result && $result->num_rows > 0 ) {
        $room = $result->fetch_assoc();
    } else {
        die('Errore');
    }
} else {
    die('Error');
}

// Close connection
$conn->close();