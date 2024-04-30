<?php
$con=mysqli_connect('localhost','root');
if($con){
    header("location: index.html");
}
else{
    echo "no registration";
}
mysqli_select_db($con,'userinfo');
$name=$_POST['name'];
$number=$_POST['number'];
$course=$_POST['course'];
$payment=$_POST['payment'];
$education=$_POST['education'];
$email=$_POST['email'];
$password=$_POST['password'];
$query="insert into courseregisterinfo (name,number, course, payment, education, email, password) 
values ('$name','$number','$course','$payment','$education','$email','$password')";


mysqli_query($con,$query);
?>