<?php
include_once __DIR__ . '/../database.php';

if ( empty($_POST['id']) ) {
    die('Errore');
}

$id_room = $_POST['id'];
$sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

if ( $result && $conn->affected_rows > 0 ) {
    header("Location: $base_path?del=$id_room");
} elseif ( $result ) {
    echo 'No room found';
} else {
    echo 'Error';
}