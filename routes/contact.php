<?php
require '/app/global.php';
$contact_info = simplexml_load_file('/app/content/contact.xml');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <?php require '/app/header.php'; ?>
        <div class="container">
        	<table>
        		<tr>
        			<th>Contact Method</th>
        			<th>Contact Address/Phone</th>
        		</tr>
        		<tr>
        			<td>Email</td>
        			<td><?php echo $contact_info->email; ?></td>
        		</tr>
        		<tr>
        			<td>Phone</td>
        			<td><?php echo $contact_info->phone; ?></td>
        		</tr>
        	</table>
        </div>
    </body>
</html>
