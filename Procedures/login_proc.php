<?php
    include("../Connection/config.php");
    $sql="CREATE PROCEDURE `login_procedure`(IN `email` VARCHAR(255), IN `password` VARCHAR(255)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER SELECT * FROM `signup` WHERE email=email AND password=password
    ";
    $res=mysqli_query($conn,$sql);
    if($res){
        echo "Procedure Created successfully";
    }
?>