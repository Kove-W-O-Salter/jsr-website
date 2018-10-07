
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
        <script>
            var image_index = 1;
            slideShow(image_index);

            function slideShow(inc) {
                let images = document.getElementsByClassName("slideShow");
                
                if (image_index > images.length()) {
                    image_index = 1;
                } else if (image_index < 0) {
                    image_index = images.length();
                }

                let newImages = images.forEach (function (image, index) {
                    return image.style.display = "none";
                });

                image_index += inc;

                newImages[image_index - 1].style.display = "block";
            }
        </script>
    </head>
    <body>
        <?php require './header.php'; ?>
    	<div class='container'>
            <?php echo '<h1>' . $rooms_room->name . '</h1>'; ?>
            <?php
            foreach ($rooms_room->images->children() as $image) {
                echo '<img class=\'slideShow\' src=\'./images/' . $image . '\' style="width:50%"/>';
            }
            ?>
            <button onclick="slideShow(+1)" class='normal_button'> NEXT </button>
            <button onclick="slideShow(-1)" class='normal_button'> PREVIOUS </button>
            <?php echo $rooms_room->description; ?>
    	</div>
    </body>
</html>