
<?php require './global.php'; ?>
<?php
    $rooms_room_id = $_GET['room_id'];
    $rooms_room = $global_rooms[$rooms_room_id - 1];
    echo '<br> rooms_ROOM_ID = ' . $rooms_room_id . '<br>';
    echo '<br> ROOM_DUMP = ';
    var_dump($rooms_room);
    echo '<br>';
    echo '<br> ACTUAL_rooms_ROOM_ID = ' . $rooms_room->id . '<br>';
    echo '<br> ACTUAL_ROOM_NAME = ' . $rooms_room->name . '<br>';
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