<?php 
    session_start();
    if(!isset($_SESSION["logged-user"]))
        header("Location: ../page-login.php");
    
    require('connect.php');
    $Selected = $_POST['tag_id'];
    $stmt = $connector->prepare('DELETE FROM `tags` WHERE `id` = :id');
    $stmt->bindValue(":id",$Selected,PDO::PARAM_INT);
    $stmt->execute();
    $deletedTags = $stmt->rowCount();

    $stmt = $connector->prepare('DELETE FROM `alerter` WHERE `tag_id` = :tag_id');
    $stmt->bindValue(":tag_id",$Selected,PDO::PARAM_INT);
    $stmt->execute();
    $deletedAlerts = $stmt->rowCount();
    
    $error=false;
    if($deletedTags!=1){
        $error=true;
    }
    
    if($error){echo "Error";}
    else{echo "Success";}
?>