<?php
    include("../Connection/config.php");
    $sql="CREATE PROCEDURE `updatename_procedure`(IN `fname` VARCHAR(255),IN `lname` VARCHAR(255), IN `id` INT(255)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER UPDATE `signup` SET `fname`=fname,`lname`=lname WhERE `user-id`=id
    ";
    $res=mysqli_query($conn,$sql);
    if($res){
        echo "Procedure Created successfully";
    }
?>