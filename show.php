<?php 
include __DIR__ . '/partials/show/server.php';
include __DIR__ . '/partials/head.php';
?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <header>
                <h2 class="text-primary">Room <?php echo $room['room_number'] ?> details</h2>
            </header>

            <div class="card mb-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        Id: <?php echo $room['id'] ?>
                    </li>
                    <li class="list-group-item">
                        Number: <?php echo $room['room_number'] ?>
                    </li>
                    <li class="list-group-item">
                        Beds: <?php echo $room['beds'] ?>
                    </li>
                    <li class="list-group-item">
                        Floor: <?php echo $room['floor'] ?>
                    </li>
                </ul>
            </div>

            <a href="./">Back to homepage &gt;</a>
        </div>
    </div>
</main>