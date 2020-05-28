<?php 
include __DIR__ . '/../database.php';

$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

if ( $result && $result->num_rows > 0 ) {
    $rooms = [];
    while( $row = $result->fetch_assoc() ) {
        $rooms[] = $row;
    }
} elseif ( $result ) {
    echo 'No results';
} else {
    echo 'Error';
}

$conn->close();