<?php require '/app/global.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="/app/style.css">
    </head>
    <body>
        <?php require '/app/header.php'; ?>
        <div class="container">
            <div class="about">
                <?php
                $filename = '/app/content/about.html';
                $handle = fopen($filename, 'r');
                echo fread($handle, filesize($filename));
                fclose($handle);
                ?>
            </div>
        </div>
    </body>
</html>
