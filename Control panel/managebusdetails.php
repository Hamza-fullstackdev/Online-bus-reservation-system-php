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
                <li><a href="./dashboard.php">Dashboard</a></li>
                <li><a href="./register.php">Registered People</a></li>
                <li><a href="./dashboard.php">Admin Panel Users</a></li>
                <li><a href="./addbus.php">Add a New Bus</a></li>
                <li class="active"><a href="./managebusdetails.php">Manage Buses</a></li>
                <li><a href="./Ticket.php">Tickets</a></li>
            </ul>
        </nav>
    </div>
    <div class="rightmaindata">
        <main>
            <div class="dashboardheading">
                <h1>Manage Buses</h1>
                <p>Wishing you a Happy Journey!!</p>
            </div>
            <div class="managefood center">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Bus No</th>
                            <th>Departure</th>
                            <th>Destination</th>
                            <th>Seats Available</th>
                            <th>Fare</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                include("../Connection/config.php");

                                $sql="SELECT * FROM `bus-detail`";
                                $res=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0){
                                    $bustempid=1;
                                    while($rows=mysqli_fetch_assoc($res)){
                                        $busid=$rows["bus_id"];
                                        $busname=$rows["bus_name"];
                                        $busimage=$rows["bus_image"];
                                        $busno=$rows["bus_no"];
                                        $busseats=$rows["total_seats"];
                                        $busclass=$rows["bus_class"];
                                        $departurecity=$rows["departure_city"];
                                        $destinationcity=$rows["destination_city"];
                                        $departuretime=$rows["departure_time"];
                                        $busfare=$rows["fare"];
                                        ?>
                                    <tr>
                                        <td><?php echo $bustempid++;?></td>
                                        <td><img src="../Images/<?php echo $busimage;?>.jpg" alt="bus_image"></td>
                                        <td><?php echo $busno;?></td>
                                        <td><?php echo $departurecity;?></td>
                                        <td><?php echo $destinationcity;?></td>
                                        <td><?php echo $busseats;?></td>
                                        <td><?php echo $busfare;?></td>
                                        <td>
                                            <a href="../Control panel/update.php?id=<?php echo $busid;?>"><i class="bi bi-pencil-square update"></i></a> &nbsp; &nbsp;
                                            <a href="./deletebus.php?id=<?php echo $busid;?>"><i class="bi bi-trash3 delete"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

