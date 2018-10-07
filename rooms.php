
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
            <?php echo '<h1>' . $rooms_room->name . '</h1>'; ?>
            <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1} 
                if (n < 1) {slideIndex = x.length} ;
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none"; 
                }
                x[slideIndex-1].style.display = "block"; 
            }
            </script>
            <?php
            foreach ($rooms_room->images->children() as $image) {
                echo '<img class=\'mySlides\' src=\'./images/' . $image . '\' style=\'width: 50%\'>';
            }
            ?>
            <button class="normal_button" onclick="plusDivs(-1)">&#10094;</button>
            <button class="normal_button" onclick="plusDivs(+1)">&#10095;</button>
            <?php echo $rooms_room->description; ?>
    	</div>
    </body>
</html>