<?php require './global.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="./style.css">
    	<?php
    		$room_id = $_GET['room_id'];
    		$room = $rooms[$room_id - 1];
            echo '<br> ROOM_ID = ' . $room_id . '<br>';
            echo '<br> ROOM_DUMP = ';
            var_dump($room);
            echo '<br>';
            echo '<br> ACTUAL_ROOM_ID = ' . $room->id . '<br>';
            echo '<br> ACTUAL_ROOM_NAME = ' . $room->name . '<br>';
    	?>
    </head>
    <body>
        <?php require './header.php'; ?>
    	<div class='container'>
    		<h1> <?php echo $room->name; ?> </h1>
    		<?php echo $room->description; ?>
    	</div>
    </body>
</html>