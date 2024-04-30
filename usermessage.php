<?php
$con = mysqli_connect('localhost','root');
if($con){
    header("location: index.html");
}else{
    echo "no connection";
}
mysqli_select_db($con,'userdoubtmessage');
$user=$_POST['user'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$query= "insert into  usermessagedata (user, email, subject, message)
values ('$user','$email','$subject','$message')";

mysqli_query($con,$query);
?>