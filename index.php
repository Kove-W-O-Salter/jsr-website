<?php require './global.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="container">
            <div class="banner">
                <div class="banner_header">
                    JSR
                </div>
                <div class="banner_sub_header">
                    John Salter Rooms
                </div>
                <div class="banner_navbar">
                    <a class="banner_navbar_button" href="/"> HOME </a>
                    <div class="banner_navbar_dropdown">
                        <div class="banner_navbar_dropdown_button"> ROOMS </div>
                        <div class="banner_navbar_dropdown_items">
                            <?php
                            foreach ($rooms as $room) {
                               echo '<a href=\'./rooms.php?room_id=';
                               echo $room->id;
                               echo '\'>';
                               echo $room->name ;
                               echo '</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about">
                JSR (<i>John Salter Rooms</i>) is a small congregation of rental rooms on a wildlife reserve.
            </div>
        </div>
    </body>
</html>
