<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bus System</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <?php
        include ("../Connection/config.php");
        $userid=$_GET["userid"];
        $sql="SELECT * FROM `signup` WHERE `user-id`=$userid";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)==1){
            while($row=mysqli_fetch_assoc($res)){
                $id=$row["user-id"];
                $img=$row["image"];
                $fname=$row["fname"];
            }
        }
    ?>
    <div class="container">
        <header class="flex">
            <div class="logo">
                <img style="width: 80px; height: 80px; border-radius: 50%;" src="../UploadImage/<?php echo $img ?>" alt="user-Image">
            </div>
            <div class="button">
                <a href="./profile.php?id=<?php echo $id?>"><button>See Profile</button></a>&nbsp; &nbsp;
                <a href="./index.php"><button>Logout</button></a>
            </div>
        </header>
        <div class="herosection center">
            <div class="herocontent">
                <h1 style="font-size: 4rem;">Hii <?php echo $fname?>! We welcome you again</h1>
                <p style="font-size: 1.8rem; color: white;">Lets buy a Ticket and start your journey</p>
                <a href="./routes.php?userid=<?php echo $id;?>"><button>Buy Ticket</button></a>
            </div>
        </div>
    </div>
</body>
</html>