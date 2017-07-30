<?php 
    session_start();
    if(!isset($_SESSION["logged-user"]))
        header("Location: ../page-login.php");
    
    require('connect.php');
    $Selected = json_decode($_POST['Selected'],true);
    $error=false;
    foreach($Selected as $id)
    {
        $stmt = $connector->prepare('DELETE FROM `alerter` WHERE `id` = :id');
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $deleted = $stmt->rowCount();
        if($deleted!=1){
            $error=true;
        }
    }
    if($error){echo "Error";}
    else{echo "Success";}
?>