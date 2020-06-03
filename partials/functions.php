<?php 
/**
 * GET ALL RECORDS
 */

function getAll($conn, $table) {
    // Query
    $sql = "SELECT * FROM `$table`";
    $result = $conn->query($sql);

    // Fetching results...
    if ( $result && $result->num_rows > 0 ) {
        $records = [];
        while( $row = $result->fetch_assoc() ) {
            $records[] = $row;
        }
    } elseif ( $result ) {
        $records = [];
    } else {
        $records = false;
    }

    // Closing connection
    $conn->close();

    return $records;
}

/**
 * GET RECORD BY ID
 */

function getById($conn, $table, $id) {
    
    // Query
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    // Fetching results...
    if ( $result && $result->num_rows > 0 ) {
        $record = $result->fetch_assoc();
    } elseif ( $result ) {
        $record = [];
    } else {
        $record = false;
    }

    // Closing connection
    $conn->close();

    return $record;
}


/**
 * DELETE RECORD BY ID
 */

function deleteById($conn, $table, $id, $url) {
    $sql = "DELETE FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    // Redirect
    if ( $result && $conn->affected_rows > 0 ) {
        header("Location: $url");
    } elseif ( $result ) {
        die('No room found');
    } else {
        die('Error');
    }

    // Close connection
    $conn->close();
}