<?php require '/app/global.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="/style.css">
        <script src='/js/slideshow.js'/>
    </head>
    <body>
        <?php require '/app/header.php'; ?>
        <div class="container">
            <div class="about">
                <?php
                $filename = '/app/content/about.html';
                $handle = fopen($filename, 'r');
                $images = simplexml_load_file('/app/content/index.xml') or die('Couldn\'t load index.xml');
                var_dump($images);
                echo '<br>';
                var_dump($images->children());

                slideshow($images);
                echo fread($handle, filesize($filename));
                fclose($handle);
                ?>
            </div>
        </div>
    </body>
</html>
