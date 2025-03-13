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
                <li><a href="../Control panel/register.php">Registered People</a></li>
                <li><a href="../Control panel/addadmin.php">Admin Panel Users</a></li>
                <li><a href="../Control panel/addbus.php">Add a New Bus</a></li>
                <li><a href="../Control panel/managebusdetails.php">Manage Buses</a></li>
                <li class="active"><a href="../Control panel/Ticket.php">Tickets</a></li>
            </ul>
        </nav>
    </div>
    <div class="rightmaindata">
        <main>
            <div class="dashboardheading">
                <h1>Passengers Tickets</h1>
                <p>Wishing you a Happy Journey!!</p>
            </div>
            <div class="managefood center">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>CNIC</th>
                            <th>Bus No</th>
                            <th>Dep</th>
                            <th>Dest</th>
                            <th>NOP</th>
                            <th>Seats</th>
                            <th>Fare</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                include("../Connection/config.php");

                                $sql="SELECT * FROM `ticket`";
                                $res=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0){
                                    $id=0;
                                    while($rows=mysqli_fetch_assoc($res)){
                                        $passengerid=$rows["passenger-id"];
                                        $passengerimage=$rows["passenger-image"];
                                        $passengercnic=$rows["passenger-cnic"];
                                        $passengername=$rows["passenger-name"];
                                        $passengerbusno=$rows["passenger-bus-no"];
                                        $passengerdeparture=$rows["passenger-departure"];
                                        $passengerdestination=$rows["passenger-destination"];
                                        $passengerfare=$rows["passenger-fare"];
                                        $passengerseats=$rows["passenger-seat-no"];
                                        $passengernop=$rows["passenger-total-seats"];
                                        $passengerbookdate=$rows["passenger-book-date"];
                                        
                                        ?>
                        <tr>
                            <td><?php echo $passengername;?></td>
                            <td><?php echo $passengercnic;?></td>
                            <td><?php echo $passengerbusno;?></td>
                            <td><?php echo $passengerdeparture;?></td>
                            <td><?php echo $passengerdestination;?></td>
                            <td><?php echo $passengernop;?></td>
                            <td><?php echo $passengerseats;?></td>
                            <td><?php echo $passengerfare;?></td>
                            <td><?php echo $passengerbookdate;?></td>
                            <td>
                                <a href="./deleteticket.php?id=<?php echo $passengerid;?>"><i class="bi bi-trash3 delete"></i></a>
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