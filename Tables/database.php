<?php
    include("../Connection/connection.php");
?>

<?php
    
    $sql="CREATE DATABASE `bus-project`";
    $res=mysqli_query($conn,$sql);

    if($res){
        echo "Database created succeffully";
    }
?>