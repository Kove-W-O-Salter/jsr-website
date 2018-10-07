<?php
require './global.php';

$rooms_requested_room_id = $_GET['room_id'];
echo '<br>';
var_dump($rooms_requested_room_id);
echo '<br>';

$rooms_room = $global_rooms->room[$rooms_requested_room_id]; //echo 'Bad id'; //die ('No such room, with the id ' . $rooms_requested_room_id . ', exists.');
echo '<br>';
var_dump($rooms_room);
echo '<br>';
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