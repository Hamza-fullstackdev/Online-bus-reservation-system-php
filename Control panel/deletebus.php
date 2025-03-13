<?php
    include ("../Connection/config.php");
    $id=$_GET["id"];
    $sql="DELETE FROM `bus-detail` WHERE `bus_id`=$id";
    $conn=mysqli_query($conn,$sql);
    if($conn){
        header("location:http://localhost/Bus-service/Control Panel/managebusdetails.php");
    }
?>