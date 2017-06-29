<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $mydb = 'kjc_website_alert';
    $link  = mysqli_connect($server, $user, $pass,$mydb);
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
?>
