<?php
include_once('inc/header.php');
?>
    <div class="row">
        <div class="flex-column d-flex">
<?php
require('inc/db-class.php');

// Instantiate the db
$db = new Database;

    if (isset($db)) {
        echo "<h1>LEMMY!!!!! is on fire</h1>";
        }
    ?>
    </div>
</div>

<?php

include_once('inc/footer.php');
?>
