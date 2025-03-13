<?php
    include("../Connection/config.php");
    $sql="CREATE PROCEDURE `signup_procedure`(IN `image` VARCHAR(255), IN `fname` VARCHAR(255), IN `lname` VARCHAR(255), IN `email` VARCHAR(255), IN `password` VARCHAR(255), IN `cnic` VARCHAR(255), IN `address` VARCHAR(255), IN `phone` VARCHAR(255), IN `gender` BOOLEAN, IN `dob` VARCHAR(255)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER INSERT INTO `signup` (`image`,`fname`,`lname`,`email`,`password`,`CNIC`,`address`,`mobile`,`gender`,`dob`) VALUES (image,fname,lname,email,password,cnic,address,phone,gender,dob)
    ";
    $res=mysqli_query($conn,$sql);
    if($res){
        echo "Procedure Created successfully";
    }
?>