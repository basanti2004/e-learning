<?php
require("login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="demo.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:gray">
    <div class="container" style="display:flex;background-color: #e8e6ec;padding:50px 0px;padding-left:30px;margin-top:70px;margin-left:50px;
    width:80%;margin-left:90px">
        <div class="myform">
            <form method="post">
                <h2>ADMIN LOGIN</h2>
                <input type="email"  name="email" placeholder="email" style="width:90%;margin:10px 15px;padding:15px 20px">
                <input type="password"  name="password" placeholder="password" style="width:90%;margin:10px 15px;padding:15px 20px ">
                <button  type="submit" name="login" style="padding:10px 20px;margin-left:40px;margin-top:30px;background-color:darkgreen;
                border:darkgreen;font-size:23px;color:white;font-weight:600;border-radius:5px">LOGIN</button>
            </form>
        </div>
        <div class="image">
            <img src="com.jpg" style="width:85%;height:50vh">
        </div>
    </div>
    <?php

      if(isset($_POST['login']))
      {
      $query="SELECT * FROM `logindetail` WHERE  `email`='$_POST[email]' AND  `password`='$_POST[password]'";
   $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
     session_start();
     $_SESSION['AdminLoginId']=$_POST['email'];
     header("location: ../niceadmin/adminindex.html");
    }else{
        echo "<script>alert('incorrect');</script>";    }
    }
    ?>   
</body>
</html>