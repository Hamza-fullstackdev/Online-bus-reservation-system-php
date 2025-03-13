<?php
    include("../Connection/config.php");
?>

<?php
    $sql="CREATE TABLE signup(
        `user-id` INT PRIMARY KEY AUTO_INCREMENT,
        `image` VARCHAR(255) NOT NULL,
        `fname` VARCHAR(255) NOT NULL,
        `lname` VARCHAR(255) NOT NULL,
        `email` VARCHAR(255) NOT NULL UNIQUE,
        `password` VARCHAR(30) NOT NULL,
        `CNIC` VARCHAR(15) NOT NULL UNIQUE,
        `address` VARCHAR(255) NOT NULL,
        `mobile` VARCHAR(11) NOT NULL UNIQUE,
        `gender` VARCHAR(10) NOT NULL,
        `role` VARCHAR(10) DEFAULT 'user',
        `dob` DATE NOT NULL,
        `time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
     )";
     $res=mysqli_query($conn,$sql);
     if($res){
        echo "The signup Table has successfully Created";
     }
     else{
        echo "Error Creating Table".mysqli_error();
     }
?>