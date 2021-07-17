<?php
session_start();
	
	require "userClass.php";
	
	
    $obj->logout();
  
    ?>
      <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h3>You have successfully logout</h3>
        <a href="login.php">Login</a>
    </body>
    </html>