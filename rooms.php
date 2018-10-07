<?php require './global.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="./style.css">
    	<?php
    		$room_id = $_GET['room_id'];
    		$room = $rooms[$room_id - 1];
    	?>
    </head>
    <body>
    	<div class='container'>
    		<div class='banner'>
    			<?php echo $room->name ?>
    		</div>
    	</div>
    	<div class='container'>
    		<?php echo $room->description ?>
    	</div>
    </body>
</html>