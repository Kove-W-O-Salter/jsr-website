<?php

$rooms_xml = simplexml_load_file('./rooms.xml') or die('Cannot parse rooms.xml');
$rooms = $rooms_xml->children();

echo '<br> <==   DEBUG   ==>' . '<br>';
echo var_dump($rooms);
echo '<br> <== END DEBUG ==>' . '<br>';

?>