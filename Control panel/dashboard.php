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
            <li><a href="../Php/index.php">Visit Site</a></li>
                <li class="active"><a href="../Control panel/dashboard.php">Dashboard</a></li>
                <li><a href="../Control panel/register.php">Registered People</a></li>
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
                <h1>Daewoo Service Dashboard</h1>
                <p>Wishing you a Happy Journey!!</p>
            </div>
            <div class="dashboardpanel flex">
                <div class="box center">
                    <div class="boxcontent">
                        <?php
                            include("../Connection/config.php");
                            $sql1="SELECT * FROM `bus-detail`";
                            $sql2="SELECT * FROM `signup`";
                            $sql3="SELECT * FROM `ticket`";
                            $res1=mysqli_query($conn,$sql1);
                            $res2=mysqli_query($conn,$sql2);
                            $res3=mysqli_query($conn,$sql3);
                            $totalbus=mysqli_num_rows($res1);
                            $totalsignups=mysqli_num_rows($res2);
                            $totalticket=mysqli_num_rows($res3);
                        ?>
                        <h2>Total Buses</h2>
                    <p><?php echo $totalbus; ?></p>
                    </div>
                </div>
                <div class="box center">
                    <div class="boxcontent">
                        <h2>Signed up Users</h2>
                    <p><?php echo $totalsignups; ?></p>
                    </div>
                </div>
                <div class="box center">
                    <div class="boxcontent">
                        <h2>Tickets</h2>
                    <p><?php echo $totalticket; ?></p>
                    </div>
                </div>
            
            </div>
        </main>
    </div>
</body>
</html>