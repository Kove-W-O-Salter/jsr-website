
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
<!--         var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          // var i;
          var x = document.getElementsByClassName("slideShow");
          if (n > x.length) {
            slideIndex = 1;
          }
          if (n < 1) {
            slideIndex = x.length;
          }
          // for (i = 0; i < x.length; i++) {
          //    x[i].style.display = "none";
          // }
          slideIndex+=n;
          x[slideIndex].style.display = "block";
          console.log('image ' + (slideIndex));
        }
        </script> -->
    </head>
    <body>
        <?php require './header.php'; ?>
    	<div class='container'>
            <?php echo '<h1>' . $rooms_room->name . '</h1>'; ?>
            <div class='container'>
                <?php
                foreach ($rooms_room->images->children() as $image) {
                    echo $image;
                    // echo '<img class=\'slideShow\' src=\'./images/' . $image . '\'/>';
                    // echo '<img src=\'./images/' . $image . '\'/>';
                    echo '<img class=\'image\' src=\'./images/' . $image . '\'/>';
                }
                ?>
                <!-- <button onclick="showDivs(+1)" class='normal_button'> &gt </button> -->
                <!-- <button onclick="showDivs(-1)" class='normal_button'> &lt </button> -->
            </div>
            <?php echo $rooms_room->description; ?>
    	</div>
    </body>
</html>