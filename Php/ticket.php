<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="stylesheet" href="../Css/ticket.css">
</head>
    <?php
        $phno=$_GET["phno"];
        $userid=$_GET["userid"];  ?>
    
<body>
    <div class="ticketsection center">
        <div class="ticketcontent center">
            <div class="ticket">
                <header>
                    <h2>Daewoo</h2>
                    <p>Wish you a Happy Journey!!</p>
                </header>
                <?php
                    include "../Connection/config.php";
                    $sql="SELECT * FROM `ticket` WHERE `passenger-phone-no`=$phno";
                    $res=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_assoc($res)){
                            $passengerid=$row["passenger-id"];
                            $passengername=$row["passenger-name"];
                            $passengerimage=$row["passenger-image"];
                            $passengercnic=$row["passenger-cnic"];
                            $passengerphoneno=$row["passenger-phone-no"];
                            $passengerdeparture=$row["passenger-departure"];
                            $passengerdestination=$row["passenger-destination"];
                            $passengertraveclass=$row["passenger-travel-class"];
                            $passengerbusdeparturetime=$row["passenger-bus-departure-time"];
                            $passengerbusno=$row["passenger-bus-no"];
                            $passengertotalseats=$row["passenger-total-seats"];
                            $passengerseatno=$row["passenger-seat-no"];
                            $passengertickettime=$row["passenger-ticket-time"];
                            $passengerbookdate=$row["passenger-book-date"];
                            $passengerfare=$row["passenger-fare"];

                            
                            ?>
                                    <div class="ticketimg center">
                            <img src="../UploadImage/<?php echo $passengerimage; ?>" alt="your-profile-pic">
                        </div>
                        <div class="ticketdata">
                            <p>Passenger name: <span><?php echo $passengername; ?></span></p>
                            <p>CNIC no: <span><?php echo $passengercnic; ?></span></p>
                            <p>Phone no: <span><?php echo $passengerphoneno; ?></span></p>
                            <p>Traveling class: <span>Daewoo <?php echo $passengertraveclass; ?> class</span></p>
                            <p>Bus no: <span><?php echo $passengerbusno; ?></span></p>
                            <p>Bus Arrival: <span><?php echo $passengerbusdeparturetime; ?></span></p>
                            <p>No of Passengers: <span><?php echo $passengertotalseats; ?></span></p>
                            <p>Seat no: <span><?php echo $passengerseatno; ?></span></p>
                            <p>Desparture city: <span><?php echo $passengerdeparture; ?></span></p>
                            <p>Destination city: <span><?php echo $passengerdestination; ?></span></p>
                            <p>Fare: <span>Rs <?php echo $passengerfare; ?></span></p>
                            <p>Date: <span><?php echo $passengerbookdate; ?></span></p>
                            <p>Ticket received at: <span><?php echo $passengertickettime; ?></span></p>
                         </div>

                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="ticketbtn center">
        <a href=""><button>Take a Print</button></a>&nbsp; &nbsp; &nbsp;
        <a href="../Php/dashboard.php?userid=<?php echo $userid?>"><button>Home</button></a>
    </div>
</body>
</html>