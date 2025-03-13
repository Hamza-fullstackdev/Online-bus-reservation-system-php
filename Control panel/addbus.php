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
                <li><a href="../Control panel/addadmin.php">Admin Panel Users</a></li>
                <li class="active"><a href="../Control panel/addbus.php">Add a New Bus</a></li>
                <li><a href="../Control panel/managebusdetails.php">Manage Buses</a></li>
                <li><a href="../Control panel/Ticket.php">Tickets</a></li>
            </ul>
        </nav>
    </div>
    <div class="rightmaindata">
        <main>
            <div class="dashboardheading">
                <h1>Add a new Bus</h1>
                <p>Wishing you a Happy Journey!!</p>
            </div>
            <section class="addfoodsection">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <label for="title">Bus Name:</label><br>
                    <input type="text" required name="bname"><br><br>
                    <label for="image">Bus Image</label><br>
                    <input type="file" required name="bimg"><br><br>
                    <label for="Busno">Bus No:</label><br>
                    <input type="text" required name="bno"><br><br>
                    <label for="type">Bus Type:</label><br>
                    <select name="btype" id="type">
                        <option value="Economy">Economy</option>
                        <option value="Business">Business</option>
                    </select><br><br>
                    <label for="departure">Bus departure city:</label><br>
                    <select name="desparturecity" id="desparturecity" required>
                    <option value="0">--Select--</option>
                        <option value="Sahiwal">Sahiwal</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Multan">Multan</option>
                    </select><br><br>
                    <label for="price">Destination city:</label><br>
                    <select name="destinationcity" id="desparturecity" required>
                        <option value="0">--Select--</option>
                        <option value="Sahiwal">Sahiwal</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Multan">Multan</option>
                    </select><br><br>
                    <label for="fare">Fare:</label><br>
                    <input type="text"required name="bfare"><br><br>
                    <label for="desc">Departure time:</label><br>
                    <input type="time" required name="deptime">
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
        $busname=$_POST["bname"];
        $bustype=$_POST["btype"];
        $busno=$_POST["bno"];
        $desparturecity=$_POST["desparturecity"];
        $destinationcity=$_POST["destinationcity"];
        $busfare=$_POST["bfare"];
        $busdeptime=$_POST["deptime"];

        $busimage=$_FILES["bimg"]["name"];
        $uploadimage=$_FILES["bimg"]["tmp_name"];
        $folder="../bus Images/".$busimage;
        if($_FILES["bimg"]){
            move_uploaded_file($uploadimage,$folder);
        }else{
            echo "Please select Image";
        }

        $sql="INSERT INTO `bus-detail` (`bus_image`,`bus_name`,`bus_no`,`bus_class`,`total_seats`,`departure_city`,`destination_city`,`departure_time`,`fare`)VALUES ('$busimage','$busname','$bno','$bustype',31,'$desparturecity','$destinationcity','$busdeptime',$busfare)";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("location:managebusdetails.php");
        }
        else{
            echo "Duplicate entry";
        }
    }
?>