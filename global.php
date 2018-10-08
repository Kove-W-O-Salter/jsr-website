<?php
$global_rooms_xml = simplexml_load_file('/app/content/rooms.xml') or die('Cannot parse rooms.xml');
$global_rooms = $global_rooms_xml->children();

function slideshow($slideshow_images) {
	echo '<div class=\'slideShow\'>';

    if ($slideshow_images->count() == 0) {
        echo '<center>No images available.</center>';
    } else {
        foreach ($slideshow_images->children() as $image) {
            echo '<img class=\'mySlides\' src=\'/images/' . $image . '\'>';
        }

        echo '<center><button class="normal_button" onclick="plusDivs(-1)">&#10094;</button>';
        echo '<button class="normal_button" onclick="plusDivs(+1)">&#10095;</button></center>';
    }

    echo '</div>';
    echo '<script>';
    echo '
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
';
	echo '</script>';
}
?>