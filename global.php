<?php
$global_rooms_xml = simplexml_load_file('./rooms.xml') or die('Cannot parse rooms.xml');
echo '<br>';
var_dump($global_rooms_xml);
echo '<br>';

$global_rooms = $global_rooms_xml->children()->room;
echo '<br>';
var_dump($global_rooms);
echo '<br>';
?>