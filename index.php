<?php 
include __DIR__ . '/partials/home/server.php';
include __DIR__ . '/partials/head.php';
?>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h2 class="text-primary">Hotel rooms</h2>
                </header>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Number</th>
                            <th>Floor</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if ( !empty($rooms) ) {
                            foreach ($rooms as $room) : ?>
                               <tr>
                                    <td><?php echo $room['id']; ?></td>
                                    <td><?php echo $room['room_number']; ?></td>
                                    <td><?php echo $room['floor']; ?></td>
                                    <td>
                                        <a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">View</a>
                                    </td>
                                    <td class="text-primary">Update</td>
                                    <td class="text-danger">Delete</td>
                               </tr> 
                            <?php endforeach;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>