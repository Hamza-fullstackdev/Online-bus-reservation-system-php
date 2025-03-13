<?php
$server="localhost";
$username="root";
$password="";
$dbname="bus-project";
$conn=mysqli_connect($server,$username,$password,$dbname) or die("Connection error".mysqli_error());
?>