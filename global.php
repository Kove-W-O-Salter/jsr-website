<?php
$global_rooms = simplexml_load_file('./rooms.xml')->children() or die('Cannot parse rooms.xml');
?>