<?php 
include_once __DIR__ . '/../../env.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_path; ?>dist/css/main.css">
    <title>Hotel php-crud</title>
</head>
<body>

<header class="main-header mb-4">
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php echo $base_path; ?>">Hotel DB</a>
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path; ?>">All rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path; ?>create.php">New room</a>
            </li>
        </ul>
    </nav>
</header>

<div id="app">