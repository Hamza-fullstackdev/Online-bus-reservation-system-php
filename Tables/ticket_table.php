<?php include "../Connection/config.php";?>

<?php
    $sql="CREATE TABLE `ticket`(
        `passenger-id` INT PRIMARY KEY AUTO_INCREMENT,
        `passenger-name` VARCHAR(255) NOT NULL,
        `passenger-image` VARCHAR(255) NOT NULL,
        `passenger-cnic` VARCHAR(255) NOT NULL,
        `passenger-phone-no` VARCHAR(255) NOT NULL,
        `passenger-departure` VARCHAR(255) NOT NULL,
        `passenger-destination` VARCHAR(255) NOT NULL,
        `passenger-travel-class` VARCHAR(255) NOT NULL,
        `passenger-bus-departure-time` TIME NOT NULL,
        `passenger-bus-no` VARCHAR(255) NOT NULL,
        `passenger-total-seats` INT(5) NOT NULL,
        `passenger-seat-no` VARCHAR(255) NOT NULL,
        `passenger-fare` INT(255) NOT NULL,
        `passenger-ticket-time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
        `passenger-book-date` DATE NOT NULL
    )";

    $res=mysqli_query($conn,$sql);
    if($res){
        echo "Table created succesfully!!!";
    }
?>