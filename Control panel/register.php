<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin panel</title>
    <link rel="stylesheet" href="../Css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                <li class="active"><a href="../Control panel/register.php">Registered People</a></li>
                <li><a href="../Control panel/addadmin.php">Admin Panel Users</a></li>
                <li><a href="../Control panel/addbus.php">Add a New Bus</a></li>
                <li><a href="../Control panel/managebusdetails.php">Manage Buses</a></li>
                <li><a href="../Control panel/Ticket.php">Tickets</a></li>
            </ul>
        </nav>
    </div>
    <div class="rightmaindata">
        <main>
            <div class="dashboardheading">
                <h1>Registered Users</h1>
                <p>Wishing you a Happy Journey!!</p>
            </div>
            <div class="managefood center">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../Connection/config.php");
                        $sql="SELECT * FROM `signup`";
                        $res= mysqli_query($conn,$sql);
                        $id=1;
                            while($rows=mysqli_fetch_assoc($res)){
                                $userid=$rows["user-id"];
                                $image=$rows["image"];
                                $fname=$rows["fname"];
                                $lname=$rows["lname"];
                                $email=$rows["email"];
                                $phone=$rows["mobile"];
                                $gender=$rows["gender"];
                                $time=$rows["time"];

                            ?>
                        <tr>
                            <td><?php echo $id++; ?></td>
                            <td><img src="../UploadImage/<?php echo $image; ?>" alt="user-img"></td>
                            <td><?php echo $fname; ?><?php echo $lname; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $phone; ?></td>
                            <td><?php echo ($gender==0)? "Male": "Female"; ?></td>
                            <td><?php echo $time; ?></td>
                        </tr>
                        <?php
                            }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>