<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seats</title>
    <link rel="stylesheet" href="../Css/seats.css">
</head>
    <style>
        button:disabled{
            background-color: red;
        }
    </style>
<body>
    <?php 
    $userid=$_GET["userid"];
    $busid=$_GET["busid"];
    $date=$_GET["date"];
    ?>
    <?php

        include "../Connection/config.php";
        $sql1="SELECT * FROM `signup` WHERE `user-id`=$userid";
        $res1=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($res1)==1){
            while($row=mysqli_fetch_assoc($res1)){
                $fname=$row["fname"];
                $lname=$row["lname"];
                $email=$row["email"];
                $image=$row["image"];
                $cnic=$row["CNIC"];
                $phno=$row["mobile"];
            }
        }

        $sql2="SELECT * FROM `bus-detail` WHERE `bus_id`=$busid";
        $res2=mysqli_query($conn,$sql2);
        if(mysqli_num_rows($res2)==1){
            while($row=mysqli_fetch_assoc($res2)){
                $busclass=$row["bus_class"];
                $busno=$row["bus_no"];
                $departure_time=$row["departure_time"];
                $departure_city=$row["departure_city"];
                $destination_city=$row["destination_city"];
                $departure_time=$row["departure_time"];
                $fare=$row["fare"];
            }
        }
        ?>
    <?php

        $sql3="SELECT * FROM `seats` WHERE `bus_no`='$busno'";
        $res3=mysqli_query($conn,$sql3);
        if(mysqli_num_rows($res3)==1){
            while($row=mysqli_fetch_assoc($res3)){
                $seat_id=$row["seat-id"];
                $seat01=$row["seat01"];
                $seat02=$row["seat02"];
                $seat03=$row["seat03"];
                $seat04=$row["seat04"];
                $seat05=$row["seat05"];
                $seat06=$row["seat06"];
                $seat07=$row["seat07"];
                $seat08=$row["seat08"];
                $seat09=$row["seat09"];
                $seat10=$row["seat10"];
                $seat11=$row["seat11"];
                $seat12=$row["seat12"];
                $seat13=$row["seat13"];
                $seat14=$row["seat14"];
                $seat15=$row["seat15"];
                $seat16=$row["seat16"];
                $seat17=$row["seat17"];
                $seat18=$row["seat18"];
                $seat19=$row["seat19"];
                $seat20=$row["seat20"];
                $seat21=$row["seat21"];
                $seat22=$row["seat22"];
                $seat23=$row["seat23"];
                $seat24=$row["seat24"];
                $seat25=$row["seat25"];
                $seat26=$row["seat26"];
                $seat27=$row["seat27"];
                $seat28=$row["seat28"];
                $seat29=$row["seat29"];
                $seat30=$row["seat30"];
                $seat31=$row["seat31"];
            }
        }
    ?>
        <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
            $seats=$_POST["seats"];
            $data = str_replace(' ', ',', $seats);
            $trimdata=trim($data,",");
            $array = explode(',', $trimdata);
            $nop=count($array);

            for ($i=0; $i < $nop; $i++) { 
                $sql4="UPDATE `seats` SET `seat$array[$i]`=1 WHERE bus_no='$busno'";
                $res4=mysqli_query($conn,$sql4);
            }

            $sql5="INSERT INTO `ticket`
            (`passenger-name`,`passenger-image`,`passenger-cnic`,`passenger-phone-no`,`passenger-departure`,`passenger-destination`,`passenger-travel-class`,`passenger-bus-departure-time`,`passenger-bus-no`,`passenger-total-seats`,`passenger-seat-no`,`passenger-fare`,`passenger-book-date`)
            VALUES
            ('$fname $lname','$image','$cnic','$phno','$departure_city','$destination_city','$busclass','$departure_time','$busno',$nop,'$seats',$fare*$nop,'$date')
            ";
            $res5=mysqli_query($conn,$sql5);
            if($res5){
                header("location:http://localhost/Bus-service/Php/ticket.php?userid=$userid&&busid=$busid&&date=$date&&phno=$phno");     
            }
        }
        ?>
    <header>
        <h2>Daewoo</h2>
        <p>Wish you a Happy Journey!!</p>
    </header>
    <h2 class="availableseats">Available Seats</h2>
    <div class="seatsection center">
        <div class="seatscontent">
            <table class="flex table">
                <div class="leftseats">
                    <tbody>
                        <tr>
                            <td><button id="seat1" <?php if($seat01){echo "disabled";}else{echo "";}?>>01</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat2" <?php if($seat02){echo "disabled";}else{echo "";}?>>02</button></td>
                            <td><button id="seat3" <?php if($seat03){echo "disabled";}else{echo "";}?>>03</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat7" <?php if($seat07){echo "disabled";}else{echo "";}?>>07</button></td>
                            <td><button id="seat8" <?php if($seat08){echo "disabled";}else{echo "";}?>>08</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat12" <?php if($seat12){echo "disabled";}else{echo "";}?>>12</button></td>
                            <td><button id="seat13" <?php if($seat13){echo "disabled";}else{echo "";}?>>13</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat17" <?php if($seat17){echo "disabled";}else{echo "";}?>>17</button></td>
                            <td><button id="seat18" <?php if($seat18){echo "disabled";}else{echo "";}?>>18</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat22" <?php if($seat22){echo "disabled";}else{echo "";}?>>22</button></td>
                            <td><button id="seat23" <?php if($seat23){echo "disabled";}else{echo "";}?>>23</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat27" <?php if($seat27){echo "disabled";}else{echo "";}?>>27</button></td>
                            <td><button id="seat28" <?php if($seat28){echo "disabled";}else{echo "";}?>>28</button></td>
                        </tr>
                    </tbody>
                </div>
                <div class="rightseats">
                    <tbody>
                        <tr>
                            <td><button id="seat4" <?php if($seat04){echo "disabled";}else{echo "";}?>>04</button></td>
                            <td><button id="seat5" <?php if($seat05){echo "disabled";}else{echo "";}?>>05</button></td>
                            <td><button id="seat6" <?php if($seat06){echo "disabled";}else{echo "";}?>>06</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat9" <?php if($seat09){echo "disabled";}else{echo "";}?>>09</button></td>
                            <td><button id="seat10" <?php if($seat10){echo "disabled";}else{echo "";}?>>10</button></td>
                            <td><button id="seat11" <?php if($seat11){echo "disabled";}else{echo "";}?>>11</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat14" <?php if($seat14){echo "disabled";}else{echo "";}?>>14</button></td>
                            <td><button id="seat15" <?php if($seat15){echo "disabled";}else{echo "";}?>>15</button></td>
                            <td><button id="seat16" <?php if($seat16){echo "disabled";}else{echo "";}?>>16</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat19" <?php if($seat19){echo "disabled";}else{echo "";}?>>19</button></td>
                            <td><button id="seat20" <?php if($seat20){echo "disabled";}else{echo "";}?>>20</button></td>
                            <td><button id="seat21" <?php if($seat21){echo "disabled";}else{echo "";}?>>21</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat24" <?php if($seat24){echo "disabled";}else{echo "";}?>>24</button></td>
                            <td><button id="seat25" <?php if($seat25){echo "disabled";}else{echo "";}?>>25</button></td>
                            <td><button id="seat26" <?php if($seat26){echo "disabled";}else{echo "";}?>>26</button></td>
                        </tr>
                        <tr>
                            <td><button id="seat29" <?php if($seat29){echo "disabled";}else{echo "";}?>>29</button></td>
                            <td><button id="seat30" <?php if($seat30){echo "disabled";}else{echo "";}?>>30</button></td>
                            <td><button id="seat31" <?php if($seat31){echo "disabled";}else{echo "";}?>>31</button></td>
                        </tr>
                    </tbody>
                </div>
            </table>
        </div>
    </div>
    <div class="ticketdetailsection center" style="margin-top: 10rem;background-color: black;">
        <div class="ticketsection" style="width: 60%;">
            <h2 style="text-align: center; color: var(--orange);font-size:  3rem;margin-top: 2rem;">Passenger details</h2>
            <div class="ticketform" style="padding: 1rem; color: white;">
                <form action="" method="post">
                    <label for="name" style="font-size: 1.6rem;">Passenger Name:</label><br>
                    <input type="text" value="<?php echo $fname;?><?php echo $lname;?>"style="border: 1px solid black; margin-top: .7rem; padding: .7rem ;" readonly><br><br>
                    <label for="name" style="font-size: 1.6rem;">CNIC:</label><br>
                    <input type="text" value="<?php echo $cnic;?>" readonly style="border: 1px solid black; margin-top: .7rem; padding: .7rem ;"><br><br>
                    <label for="name" style="font-size: 1.6rem;">Phone Number:</label><br>
                    <input type="text" value="<?php echo $phno;?>" readonly style="border: 1px solid black; margin-top: .7rem; padding: .7rem ;"><br><br>
                    <div id="ticketseats">
                        <label for="name" style="font-size: 1.6rem;">Seats:</label><br>
                        <input type="text" readonly id="seats" style="border: 1px solid black; margin-top: .7rem; padding: .7rem ;" name="seats" required><br><br>
                    </div>
                    <div class="submitbtn center">
                        <input type="submit" value="Book Now!" style="padding: 1rem 2rem;color: white; background-color: orange; cursor: pointer;">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let buttons=document.querySelectorAll("button");
        buttons.forEach((button)=>{
        button.addEventListener("click",(e)=>{
        button.setAttribute('disabled','true')
        let seats=document.getElementById("seats")
        seats.value+=e.target.innerHTML+ " ";
    })
})
    </script>
</body>
</html>