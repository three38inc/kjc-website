<?php

    session_start();
    if(!isset($_SESSION["logged-user"]))
        header("Location: ../page-login.php");
    
    require('connect.php');

    $visibility_period=$_POST['visibility_period'];
    $tag=$_POST['tag'];
    $color=$_POST['color'];
    $message=trim($_POST['message']);
    
    /* Get the Label Id to store */
    $stmt = $connector->prepare('SELECT * FROM `tags` WHERE `name` = :tag');
    $stmt->bindValue(":tag",$tag,PDO::PARAM_STR);
    $stmt->execute();
    if($tag_info = $stmt->fetch(PDO::FETCH_ASSOC)){
        $tag_id = $tag_info["id"];
        $stmt=$connector->prepare("UPDATE `tags` SET `color`= :color WHERE `id` =:id");
        $stmt->bindValue(":color",$color,PDO::PARAM_STR);
        $stmt->bindValue(":id",$tag_id,PDO::PARAM_INT);
        $stmt->execute();
    }
    else{
        
        $stmt=$connector->prepare("INSERT INTO `tags`(`id`, `color`, `name`) VALUES (null,:color,:tag)");
        $stmt->bindValue(":color",$color,PDO::PARAM_STR);
        $stmt->bindValue(":tag",$tag,PDO::PARAM_STR);
        $res = $stmt->execute();
        $tag_id=$connector->lastInsertId();
        
    }

    /* Get the dateCreatedTime to store */
    $date = date_create('now', timezone_open('Asia/Calcutta'));
    date_timezone_set($date, timezone_open('Asia/Calcutta'));
    $date_created = date_format($date, 'Y-m-d H:i:s');

    /* Inserting Data into Table Alerter */
    $sql="INSERT INTO `alerter`(`id`, `star`,  `tag_id`, `message`, `date_created`, `visibility_period`) VALUES (null,1,:tag_id,:message,:date_created,:visibility_period)";
    
    $stmt= $connector->prepare($sql);
    $stmt->bindValue(":tag_id",$tag_info['id'],PDO::PARAM_INT);
    $stmt->bindValue(":message",$message,PDO::PARAM_STR);
    $stmt->bindValue(":visibility_period",$visibility_period,PDO::PARAM_STR);
    $stmt->bindValue(":date_created",$date_created,PDO::PARAM_STR);
    $stmt->execute();

    $connector=null;
    $stmt=null;

    echo "success";
?>
