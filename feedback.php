<?php
$con = mysqli_connect('localhost','root');
if($con){
    header("location: index.html");
}else{
    echo "no connection";
}
mysqli_select_db($con,'feedback');
$username=$_POST['username'];
$feedback=$_POST['feedback'];
$query= "insert into  feedbackdata (username,feedback)
values ('$username','$feedback')";

mysqli_query($con,$query);
?>