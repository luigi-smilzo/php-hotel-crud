<?php 
include __DIR__ . '/partials/templates/head.php';
?>

<main class="container">
    <div class="row">
        <div class="col-12">

            <header>
                <h2 class="text-primary">Create new room</h2>
            </header>

            <form action="./partials/create/server.php" method="POST">
        
                <div class="form-group">
                    <label for="room_number">Room number</label>
                    <input type="number" class="form-control" name="room_number" id="room_number" placeholder="Insert room number">
                </div>

                <div class="form-group">
                    <label for="beds">Beds</label>
                    <input type="number" class="form-control" name="beds" id="beds" placeholder="Insert beds amount">
                </div>

                <div class="form-group">
                    <label for="floor">Floor</label>
                    <input type="number" class="form-control" name="floor" id="floor" placeholder="Insert floor number">
                </div>
                
                <div class="form-group text-right">
                    <input class="btn btn-primary" type="submit" value="Confirm">
                </div>
                
            </form>
        </div>
    </div>
</main>

<?php 
include __DIR__ . '/partials/templates/footer.php';
?>