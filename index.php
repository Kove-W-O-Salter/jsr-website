<?php require './global.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <?php require './header.php'; ?>
        <div class="container">
            <div class="about">
                <?php
                $handle = fopen('./about.txt', 'r');
                echo freed($handle, filesize($handle));
                fclose($handle);
                ?>
            </div>
        </div>
    </body>
</html>
