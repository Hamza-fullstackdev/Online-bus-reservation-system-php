<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select routes</title>
    <link rel="stylesheet" href="../Css/routes.css">
    <link rel="stylesheet" href="../Css/seats.css">
</head>
<style>
    header{
        padding:1.5rem 0;
    }
    .cardcontent select{
    margin-top: .5rem;
    padding: .5rem 2rem;
}
</style>
<?php  
    $userid=$_GET["userid"];
?>
<body>
    <div class="ticketsection center">
        <div class="ticketcontent">
            <div class="ticketcard">
                <header>
                    <h2>Daewoo</h2>
                    <p>Wish you a Happy Journey!!</p>
                </header>
                <div class="cardcontent">
                    <form action="" method="post">
                        <label for="desparture">Select departure: </label><br>
                        <select name="departurecity" id="desparturecity" required>
                            <option value="0">--Select--</option>
                            <option value="Sahiwal">Sahiwal</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Multan">Multan</option>
                        </select><br><br>
                        <label for="destination">Select destination: </label><br>
                        <select name="destinationcity" id="desparturecity" required>
                            <option value="0">--Select--</option>
                            <option value="Sahiwal">Sahiwal</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Multan">Multan</option>
                        </select><br><br>
                        <label for="calender">
                            Select travel date:
                        </label><br>
                        <input type="date" name="date" id="date" required><br><br>
                        <div class="submitbtn">
                            <input type="submit" value="Search buses">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h2 style="text-align: center; font-size: 2.5rem; margin-top: 7rem; color: orange;">Available Busses for that route</h2>
    <div class="availablebussessection center">
        <div class="availablebussescontent flex">
            
<?php
    include("../Connection/config.php");
?>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $departure=$_POST["departurecity"];
        $destination=$_POST["destinationcity"];
        $date=$_POST["date"];

        $sql="SELECT * FROM `bus-detail` WHERE departure_city='$departure' AND destination_city='$destination'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                $busid=$row["bus_id"];
                $busimage=$row["bus_image"];
                $busname=$row["bus_name"];
                $busno=$row["bus_no"];
                $busclass=$row["bus_class"];
                $busseats=$row["total_seats"];
                $busdeparture=$row["departure_city"];
                $busdestination=$row["destination_city"];
                $bustime=$row["departure_time"];
                $busfare=$row["fare"];

                ?>
                 <div class="availablebussescard">
                <div class="busimg">
                    <img src="../Images/<?php echo $busimage?>.jpg" alt="Buss Image">
                </div>
                <div class="buscontent">
                    <h2><?php echo $busname?> <?php echo $busclass;?> class</h2>
                    <p>Departure Time: <?php echo $bustime;?> pm</p>
                    <p>From: <?php echo $busdeparture?> to <?php echo $busdestination;?></p>
                    <p>Total Seats: <?php echo $busseats;?></p>
                    <p style="text-align: center; color: orange; font-size: 19px; margin-top:10px;">Fare: Rs <?php echo $busfare;?></p>
                </div>
                <div class="bookbtn center">
                    <a href="http://localhost/Bus-service/Php/seats.php?userid=<?php echo $userid;?>&&busid=<?php echo $busid;?>&&date=<?php echo $date;?>">Book Now</a>
                </div>
            </div>
                <?php
            }
        }
    }
?>
        </div>
    </div>
</body>
</html>
