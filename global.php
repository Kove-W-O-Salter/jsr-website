<?php
$global_rooms_xml = simplexml_load_file('./rooms.xml') or die('Cannot parse rooms.xml');
$global_rooms = $global_rooms_xml->children();
?>