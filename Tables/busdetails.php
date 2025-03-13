<?php
    include("../Connection/config.php");
?>

<?php

        $sql= "INSERT INTO `bus-detail`
        (`bus_image`,`bus_name`,`bus_no`,`bus_class`,`total_seats`,`departure_city`,`destination_city`,`departure_time`,`fare`)
        VALUES
        ('bus1','Daewoo','PK_9984','Economy',31,'Sahiwal','Lahore','02:00:00',590),
        ('bus2','Daewoo','PK_8781','Business',31,'Sahiwal','Lahore','08:30:00',750),
        ('bus3','Daewoo','PK_1754','Economy',31,'Sahiwal','Islamabad','12:00:00',1400),
        ('bus4','Daewoo','PK_3498','Business',31,'Sahiwal','Islamabad','04:30:00',1830),
        ('bus5','Daewoo','PK_2810','Economy',31,'Sahiwal','Multan','01:30:00',500),
        ('bus6','Daewoo','PK_6217','Business',31,'Sahiwal','Multan','06:00:00',980),
        ('bus7','Daewoo','PK_0210','Economy',31,'Lahore','Sahiwal','09:30:00',590),
        ('bus8','Daewoo','PK_2276','Business',31,'Lahore','Sahiwal','07:10:00',730),
        ('bus9','Daewoo','PK_0322','Economy',31,'Lahore','Islamabad','02:30:00',750),
        ('bus10','Daewoo','PK_3677','Business',31,'Lahore','Islamabad','05:30:00',1000),
        ('bus11','Daewoo','PK_7789','Economy',31,'Lahore','Multan','11:30:00',1150),
        ('bus12','Daewoo','PK_5555','Business',31,'Lahore','Multan','12:00:00',1550),
        ('bus13','Daewoo','PK_1111','Economy',31,'Islamabad','Sahiwal','11:30:00',1400),
        ('bus14','Daewoo','PK_2196','Business',31,'Islamabad','Sahiwal','03:00:00',1830),
        ('bus15','Daewoo','PK_0032','Economy',31,'Islamabad','Lahore','03:30:00',750),
        ('bus16','Daewoo','PK_3997','Business',31,'Islamabad','Lahore','08:00:00',1000),
        ('bus17','Daewoo','PK_2222','Economy',31,'Islamabad','Multan','10:30:00',2200),
        ('bus18','Daewoo','PK_3333','Business',31,'Islamabad','Multan','04:00:00',2850),
        ('bus19','Daewoo','PK_1234','Economy',31,'Sahiwal','Lahore','02:30:00',590),
        ('bus20','Daewoo','PK_2666','Business',31,'Sahiwal','Lahore','03:00:00',750),
        ('bus21','Daewoo','PK_9650','Economy',31,'Sahiwal','Lahore','04:30:00',600),
        ('bus22','Daewoo','PK_7788','Business',31,'Sahiwal','Lahore','04:30:00',750),
        ('bus23','Daewoo','PK_3377','Economy',31,'Sahiwal','Islamabad','10:00:00',1450),
        ('bus24','Daewoo','PK_0033','Business',31,'Sahiwal','Islamabad','03:30:00',1930),
        ('bus25','Daewoo','PK_6754','Economy',31,'Sahiwal','Multan','08:30:00',500),
        ('bus26','Daewoo','PK_6654','Economy',31,'Sahiwal','Multan','01:00:00',500),
        ('bus27','Daewoo','PK_1890','Business',31,'Sahiwal','Multan','09:30:00',990),
        ('bus28','Daewoo','PK_1112','Economy',31,'Lahore','Sahiwal','11:30:00',590),
        ('bus29','Daewoo','PK_2886','Business',31,'Lahore','Sahiwal','12:10:00',730),
        ('bus30','Daewoo','PK_0132','Economy',31,'Lahore','Islamabad','11:20:00',750),
        ('bus31','Daewoo','PK_1617','Business',31,'Lahore','Islamabad','12:15:00',1060),
        ('bus32','Daewoo','PK_5542','Economy',31,'Lahore','Multan','02:30:00',1150),
        ('bus33','Daewoo','PK_8721','Business',31,'Lahore','Multan','01:00:00',1550),
        ('bus34','Daewoo','PK_1010','Economy',31,'Islamabad','Sahiwal','06:30:00',1400),
        ('bus35','Daewoo','PK_8080','Business',31,'Islamabad','Lahore','03:00:00',1100)
        ";

        $res=mysqli_query($conn,$sql);
        if($res){
            echo "Row inserted";
        }
?>