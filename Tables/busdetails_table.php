
<?php
    include("../Connection/config.php");
?>

<?php

$sql= "CREATE TABLE `bus-detail`(
        `bus_id` INT PRIMARY KEY AUTO_INCREMENT,
        `bus_image` VARCHAR(255) NOT NULL,
        `bus_name` VARCHAR(255) NOT NULL,
        `bus_no` VARCHAR(255) NOT NULL UNIQUE,
        `bus_class` VARCHAR(255) NOT NULL,
        `total_seats` INT(70) NOT NULL,
        `departure_city` VARCHAR(255) NOT NULL,
        `destination_city` VARCHAR(255) NOT NULL,
        `departure_time` TIME NOT NULL,
        `fare` INT(255)
    )";

    $res=mysqli_query($conn,$sql);
    if($res){
        echo "Table created successfully";
    }
?>