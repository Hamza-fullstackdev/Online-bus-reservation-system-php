<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Css/login.css">
</head>
<body>
    <div class="loginsection center">
        <div class="logincontent center">
            <div class="logincard" style="border-radius: 10px; width: 450px;" >
                <header>
                    <h2>Daewoo</h2>
                    <p>Wish you a Happy Journey!!</p>
                </header>
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="formdata" style="margin-top: 2rem;">
                    <label for="email">Email:</label><br>
                    <input type="email" required name="email"><br><br>
                    <label for="email">Password:</label><br>
                    <input type="password" required name="password"><br><br>
                    <a href="http://localhost/Bus-service/Php/signup.php">Don't have a account yet? Signup</a>
                    </div>
                    <div class="signupbtn center">
                        <input type="submit" value="Login">
                    </div>
                    <?php 
    include("../Connection/config.php");
?>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=$_POST["email"];
        $password=$_POST["password"];

        $sql="SELECT * FROM `signup` WHERE email='$email' AND password='$password'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)==1){
            while($row=mysqli_fetch_assoc($res)){
                $id=$row["user-id"];
                $role=$row["role"];
            }
            if($role=="user"){
                header("location:http://localhost/Bus-service/Php/dashboard.php?userid=$id");
            }else{
                header("location:http://localhost/Bus-service/Control Panel/dashboard.php");
            }
        }
        else{
            echo "<p style='color:orange;font-size:12px; text-align:center; margin-bottom: 1.5rem;'>Email or password does not exist</p>";
        }
    }
?>
                </form>
            </div>
        </div>
    </div>
</body>
