<?php
$global_rooms_xml = simplexml_load_file('/app/content/rooms.xml') or die('Cannot parse rooms.xml');
$global_rooms = $global_rooms_xml->children();

function slideshow($slideshow_images) {
	echo '<div class=\'slideShow\'>';

    if ($slideshow_images->count() == 0) {
        echo '<center>No images available.</center>';
    } else {
        foreach ($slideshow_images->children() as $image) {
        	echo $image . '<br>';
            echo '<img class=\'mySlides\' src=\'/images/' . $image . '\'>';
        }

        echo '<center><button class="normal_button" onclick="plusDivs(-1)">&#10094;</button>';
        echo '<button class="normal_button" onclick="plusDivs(+1)">&#10095;</button></center>';
    }

    echo '</div>';
    // echo '<script src=\'/js/slideshow.js\'/>';
}
?>