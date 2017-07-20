<?php

    session_start();
    if(!isset($_SESSION["logged-user"]))
        header("Location: ../page-login.php");
    
    require('connect.php');

    $visibility_period=$_POST['visibility_period'];
    $subject=$_POST['subject'];
    $label=$_POST['label'];
    $message=$_POST['message'];

    if (!$link->query("INSERT INTO `alerter`(`id`, `star`, `subject`, `label_id`, `message`, `date_created`, `visibility_period`) VALUES (null,1,'".$subject."',".$label_id.",'".$message."','".date_created."','".$visibility_period."')")) {
        printf("Errormessage: %s\n", $link->error);
    }
    else{
        echo "SUCCESS";
    }
?>
