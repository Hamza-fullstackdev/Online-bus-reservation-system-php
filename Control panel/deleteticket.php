<?php
    include("../Connection/config.php");
    $id=$_GET["id"];
    $sql="DELETE FROM `ticket` WHERE `passenger-id`=$id";
    $res=mysqli_query($conn,$sql);
    if($res){
        header("location:http://localhost/Bus-service/Control Panel/Ticket.php");
    }
?>