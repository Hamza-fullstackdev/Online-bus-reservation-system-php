<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../Css/profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<?php
        include ("../Connection/config.php");
        $userid=$_GET["id"];
        $sql="SELECT * FROM `signup` WHERE `user-id`=$userid";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)==1){
            while($row=mysqli_fetch_assoc($res)){
                $id=$row["user-id"];
                $image=$row["image"];
                $lname=$row["lname"];
                $fname=$row["fname"];
                $cnic=$row["CNIC"];
                $phone=$row["mobile"];
                $address=$row["address"];
                $gender=$row["gender"];
                $password=$row["password"];
                $email=$row["email"];
            }
        }
    ?>
<body>
    <div class="profilesection center">
        <div class="profilecontent center">
            <div class="profile">
                <header>
                    <h2>Daewoo</h2>
                    <p>Wish you a Happy Journey!!</p>
                </header>
                <div class="profileimg center">
                    <img src="../UploadImage/<?php echo $image;?>" alt="your-profile-pic">
                </div>
                <div class="profiledata">
                    <p>Name: <span><?php echo $fname;?> <?php echo $lname;?></span>&nbsp;&nbsp;<a style="color: green; font-size: 1.8rem;" href="../Update Profle/updatename.php?userid=<?php echo $userid;?>"><i class="bi bi-pencil-square"></i></a></i></p>
                    <p>CNIC no: <span><?php echo $cnic;?></span></p>
                    <p>Phone no: <span><?php echo $phone;?></span>&nbsp;&nbsp;<a style="color: green; font-size: 1.8rem;" href="../Update Profle/updatephone.php?userid=<?php echo $userid;?>"><i class="bi bi-pencil-square"></i></a></p>
                    <p>Email: <span><?php echo $email;?></span>&nbsp;&nbsp;<a style="color: green; font-size: 1.8rem;" href="../Update Profle/updateemail.php?userid=<?php echo $userid;?>"><i class="bi bi-pencil-square"></i></a></p>
                    <p>Address: <span><?php echo $address;?></span>&nbsp;&nbsp;<a style="color: green; font-size: 1.8rem;" href="../Update Profle/updateaddress.php?userid=<?php echo $userid;?>"><i class="bi bi-pencil-square"></i></a></p>
                    <p>Gender: <span><?php echo ($gender==0)? "Male":"Femail";?></span>&nbsp;&nbsp;</p>
                    <p>Password: <span><?php echo $password;?></span>&nbsp;&nbsp;<a style="color: green; font-size: 1.8rem;" href="../Update Profle/updatepassword.php?userid=<?php echo $userid;?>"><i class="bi bi-pencil-square"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>