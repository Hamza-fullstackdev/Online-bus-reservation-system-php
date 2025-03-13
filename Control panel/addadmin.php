<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin panel</title>
    <link rel="stylesheet" href="../Css/dashboard.css">
</head>
<body>
    <div class="leftnav">
        <div class="logo">
            <h2>Daewoo</h2>
            <p>Wishing you a Happy Journey!!</p>
        </div>
        <nav>
            <ul>
                <li><a href="../Control panel/dashboard.php">Dashboard</a></li>
                <li><a href="../Control panel/register.php">Registered People</a></li>
                <li class="active"><a href="../Control panel/addadmin.php">Admin Panel Users</a></li>
                <li><a href="../Control panel/addbus.php">Add a New Bus</a></li>
                <li><a href="../Control panel/managebusdetails.php">Manage Buses</a></li>
                <li><a href="../Control panel/Ticket.php">Tickets</a></li>
            </ul>
        </nav>
    </div>
    <div class="rightmaindata">
        <main>
            <div class="dashboardheading">
                <h1>Add a new Admin</h1>
                <p>Wishing you a Happy Journey!!</p>
            </div>
            <section class="addfoodsection">
                <form action="#" method="POST" enctype="multipart/form-data">
                <label for="title">Admin First Name:</label><br>
                    <input type="text" required name="fname"><br><br>
                    <label for="title">Admin Second Name:</label><br>
                    <input type="text" required name="lname"><br><br>
                    <label for="image">Admin pic:</label><br>
                    <input type="file" name="image" accept="image/*"><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" required name="email"><br><br>
                    <label for="password">Password:</label><br>
                    <input type="password" required name="password"><br><br>
                    <label for="CNIC">CNIC:</label><br>
                    <input type="number" required name="cnic"><br><br>
                    <label for="address">Address:</label><br>
                    <input type="text" required name="address"><br><br>
                    <label for="phone">Phone:</label><br>
                    <input type="number"required name="phone"><br><br>
                    <label for="gender">Gender:</label><br>
                    <select name="gender" id="gender" required>
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select><br><br>
                    <label for="dob">Date of Birth:</label><br>
                    <input type="date" name="dob" required><br><br>
                    <div class="submitform">
                        <button><input type="submit"></button>&nbsp; &nbsp;
                        <button><input type="reset"></button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>

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

    $sql="INSERT INTO `signup` (`image`,`fname`,`lname`,`email`,`password`,`CNIC`,`address`,`mobile`,`gender`,`role`,`dob`) VALUES ('$image','$fname','$lname','$email','$password',$cnic,'$address',$phone,'$gender','admin','$dob')";

    $res=mysqli_query($conn,$sql);
    if($res){
        header("location:http://localhost/Bus-service/Control Panel/register.php");
    }
}
?>
<!-- 

