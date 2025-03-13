<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../Css/signup.css">
</head>

<body>
    <div class="signupsection center">
        <div class="signupcontent center">
            <div class="signupcard">
                <header>
                    <h2>Daewoo</h2>
                    <p>Wish you a Happy Journey!!</p>
                </header>
                <form action="#" method="post" enctype="multipart/form-data" onsubmit="return validatedata()">
                    <div class="signupimg">
                        <img src="../Images/images.png" alt="Image" id="profilepic"><br>
                        <input type="file" accept="image/*" required id="image" name="image">
                        <button onclick="selectimage()">Select Image</button>
                    </div>
                    <div class="formdata">
                        <div class="nameform flex margin">
                            <div class="fname">
                                <label for="fname">First Name:</label><br>
                                <input type="text" required name="fname" id="fname">
                            </div>
                            <div class="lname">
                                <label for="lname">Last Name:</label><br>
                                <input type="text" required name="lname" id="lname">
                            </div>
                        </div>
                        <div class="emailform flex margin">
                            <div class="email">
                                <label for="email">Email:</label><br>
                                <input type="email" required name="email">
                            </div>
                            <div class="password">
                                <label for="password">Password:</label><br>
                                <input type="password" required name="password" id="password">
                            </div>
                        </div>
                        <div class="cnicform flex margin">
                            <div class="cnic">
                                <label for="cnin">CNIC:</label><br>
                                <input type="number" required name="cnic" id="cnic">
                            </div>
                            <div class="address">
                                <label for="phone">Address:</label><br>
                                <input type="text" required name="address" id="address">
                            </div>
                        </div>
                        <div class="phoneform flex margin">
                            <div class="phone">
                                <label for="phone">Mobile No:</label><br>
                                <input type="number" required name="phone" id="phone">
                            </div>
                            <div class="gender">
                                <label for="gender">Gender:</label><br>
                                <select name="gender" id="gender" required>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="dobform">
                            <label for="phone">Date of Birth:</label><br>
                            <input type="date" required name="dob"><br><br>
                            <a href="./login.php">Already Have a account? Login</a>
                        </div>
                        
                    </div>
                    <div class="signupbtn center">
                        <input type="submit" value="Signup" style='cursor:pointer;'><br>
                    </div>
                    <div id="showerror">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../JavaScript/signup.js"></script>
    <script src="../JavaScript/formvalidation.js"></script>
</body>

</html>
<?php

include ("../Connection/config.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $image=$_FILES["image"]["name"];
    $uploadimage=$_FILES["image"]["tmp_name"];
    $folder="../UploadImage/".$image;
    if($_FILES["image"]){
        move_uploaded_file($uploadimage,$folder);
    }else{
        echo "Please select Image";
    }
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cnic=$_POST["cnic"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];

    $sql="INSERT INTO `signup` (`image`,`fname`,`lname`,`email`,`password`,`CNIC`,`address`,`mobile`,`gender`,`dob`) VALUES ('$image','$fname','$lname','$email','$password','$cnic','$address','$phone','$gender','$dob')";

    $res=mysqli_query($conn,$sql);
    if($res){
        echo '<script>window.location.href = "http://localhost/Bus-service/Php/login.php";</script>';
    }
}
?>