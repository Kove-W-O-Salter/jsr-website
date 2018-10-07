<?php require './global.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="./style.css">
    	<?php
            echo var_dump($rooms);
    		$room_id = $_GET['room_id'];
            echo $room_id;
    		$room = $rooms[$room_id - 1];
    	?>
    </head>
    <body>
        <?php require './header.php' ?>
    	<div class='container'>
    		<h1> <?php echo $room->name ?> </h1>
    		<?php echo $room->description ?>
    	</div>
    </body>
</html>