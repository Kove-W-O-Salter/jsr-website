
<?php
require './global.php';

$rooms_room_id = $_GET['room_id'];
$rooms_room = $global_rooms[$rooms_room_id - 1] or die('No such room, with the id \'' . $rooms_room_id . '\', exists.');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php require './header.php'; ?>
    	<div class='container'>
            <?php
            echo '<h1>' . $rooms_room->name . '</h1>';
            echo $rooms_room->description;
            ?>
    	</div>
    </body>
</html>