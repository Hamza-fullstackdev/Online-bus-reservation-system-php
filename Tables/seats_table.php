<?php
    include "../Connection/config.php";

    $sql="CREATE TABLE `seats`
    (
        `seat-id` INT PRIMARY KEY AUTO_INCREMENT,
        `bus_no` VARCHAR(255) UNIQUE,
        `seat01` BOOLEAN DEFAULT 0,
        `seat02` BOOLEAN DEFAULT 0,
        `seat03` BOOLEAN DEFAULT 0,
        `seat04` BOOLEAN DEFAULT 0,
        `seat05` BOOLEAN DEFAULT 0,
        `seat06` BOOLEAN DEFAULT 0,
        `seat07` BOOLEAN DEFAULT 0,
        `seat08` BOOLEAN DEFAULT 0,
        `seat09` BOOLEAN DEFAULT 0,
        `seat10` BOOLEAN DEFAULT 0,
        `seat11` BOOLEAN DEFAULT 0,
        `seat12` BOOLEAN DEFAULT 0,
        `seat13` BOOLEAN DEFAULT 0,
        `seat14` BOOLEAN DEFAULT 0,
        `seat15` BOOLEAN DEFAULT 0,
        `seat16` BOOLEAN DEFAULT 0,
        `seat17` BOOLEAN DEFAULT 0,
        `seat18` BOOLEAN DEFAULT 0,
        `seat19` BOOLEAN DEFAULT 0,
        `seat20` BOOLEAN DEFAULT 0,
        `seat21` BOOLEAN DEFAULT 0,
        `seat22` BOOLEAN DEFAULT 0,
        `seat23` BOOLEAN DEFAULT 0,
        `seat24` BOOLEAN DEFAULT 0,
        `seat25` BOOLEAN DEFAULT 0,
        `seat26` BOOLEAN DEFAULT 0,
        `seat27` BOOLEAN DEFAULT 0,
        `seat28` BOOLEAN DEFAULT 0,
        `seat29` BOOLEAN DEFAULT 0,
        `seat30` BOOLEAN DEFAULT 0,
        `seat31` BOOLEAN DEFAULT 0
    )";
    $res=mysqli_query($conn,$sql);
    if($res){
        echo "Table created successfuly";
    }
?>