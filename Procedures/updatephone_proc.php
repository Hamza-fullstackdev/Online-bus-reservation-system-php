<?php
    include("../Connection/config.php");
    $sql="CREATE PROCEDURE `updatephone_procedure`(IN `phone` VARCHAR(255), IN `id` INT(255)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER UPDATE `signup` SET `mobile`=phone WhERE `user-id`=id
    ";
    $res=mysqli_query($conn,$sql);
    if($res){
        echo "Procedure Created successfully";
    }
?>