<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Email</title>
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
                    <label for="email">Email:</label><br>
                    <input type="email" required name="email"><br><br>
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
        $email=$_POST["email"];
        $sql="UPDATE `signup` SET `email`='$email' WhERE `user-id`=$userid";
        $conn=mysqli_query($conn,$sql);
        if($conn){
            header("location:http://localhost/Bus-service/Php/profile.php?id=$userid");
        }
    }
?>