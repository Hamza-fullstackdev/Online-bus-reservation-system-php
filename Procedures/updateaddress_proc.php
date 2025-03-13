<?php
    include("../Connection/config.php");
    $sql="CREATE PROCEDURE `updateaddress_procedure`(IN `address` VARCHAR(255), IN `id` INT(255)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER UPDATE `signup` SET `address`=address WhERE `user-id`=id
    ";
    $res=mysqli_query($conn,$sql);
    if($res){
        echo "Procedure Created successfully";
    }
?>