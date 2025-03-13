<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Name</title>
    <link rel="stylesheet" href="../Css/login.css">
</head>

<body>
    <div class="loginsection center">
        <div class="logincontent center">
            <div class="logincard">
                <header>
                    <h2>Daewoo</h2>
                    <p>Wish you a Happy Journey!!</p>
                </header>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="formdata">
                    <label for="fname">First Name:</label><br>
                    <input type="text" required name="fname"><br><br>
                    <label for="lname">Last Name:</label><br>
                    <input type="text" required name="lname"><br><br>
                    </div>
                    <div class="signupbtn center">
                        <input type="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
    include ("../Connection/config.php");
    $userid=$_GET["userid"];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $sql="UPDATE `signup` SET `fname`='$fname',`lname`='$lname' WHERE `user-id`=$userid";
        $conn=mysqli_query($conn,$sql);
        if($conn){
            header("location:http://localhost/Bus-service/Php/profile.php?id=$userid");
        }
    }
?>