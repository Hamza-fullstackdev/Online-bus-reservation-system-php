<?php
    include("../Connection/config.php");
    $sql="CREATE PROCEDURE `updateemail_procedure`(IN `email` VARCHAR(255), IN `id` INT(255)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER UPDATE `signup` SET `email`=email WhERE `user-id`=id
    ";
    $res=mysqli_query($conn,$sql);
    if($res){
        echo "Procedure Created successfully";
    }
?>