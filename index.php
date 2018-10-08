<?php require './global.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php require './header.php'; ?>
        <div class="container">
            <div class="about">
                <?php
                $filename = './content/about.html';
                $handle = fopen($filename, 'r');
                echo fread($handle, filesize($filename));
                fclose($handle);
                ?>
            </div>
        </div>
    </body>
</html>
