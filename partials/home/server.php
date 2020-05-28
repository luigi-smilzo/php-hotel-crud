<?php 
include __DIR__ . '/../database.php';

// Query
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

// Fetching results...
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

// Closing connection
$conn->close();