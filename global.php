<?php
$global_rooms = simplexml_load_file('./rooms.xml')->room or die('Cannot parse rooms.xml');
echo '<br>';
var_dump($global_rooms);
echo '<br>';
?>