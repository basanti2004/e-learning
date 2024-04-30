<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <link rel="stylesheet" href="demo.css"/>
    <link rel="stylesheet" href="inspectcourse.css"/>
    <link rel="stylesheet"  type="text/css" href="adminpanel.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <nav>
    <div class="adminname">
        <h1>ADMIN PANEL</h1>
    </div>
    <div class="option">
        <div class="button">
             <a class="active" href="adminpanel.php">dashboard</a>
               <a href="">courses</a>
               <a href="">student</a>
               <a href="">payment</a>
               <a href="main.php">Log Out</a>
    </div>

        </div>
        </div>
  </nav>
  <div class="course-box">
        <div class="box">
           <h1>courses</h1>
            <div class="details">
               <h5>8</h5>
               <h5>courses</h5>
            </div>
     </div>
     <div class="box">
           <h1>Visiters</h1>
            <div class="details">
               <h5>2,49,93,723</h5>
               <h5>users</h5>
            </div>
     </div>
     <div class="box">
           <h1>enroll</h1>
            <div class="details">
               <h5>10</h5>
               <h5>students</h5>
            </div>
     </div>
   </div>
   <div class="row" style="margin-left:210px;margin-top:30px">
      <table class="table text-center mt-3 table-bordered">
         <thead>
            <tr>
               <th>id</th>
               <th>name</th>
               <th>number</th>
               <th>course</th>
               <th>payment</th>
               <th>education</th>
               <th>email</th>
               <th>password</th>
            </tr>
            </thead>
            <?php
            $conn = mysqli_connect("localhost","root","","userinfo");
            if($conn ->connect_error){
               die("connection failed:" . $conn->connect_error);
            }
            $sql="SELECT id ,name, number, course, payment, education, email, password from courseregisterinfo";
            $result = $conn-> query($sql);
            if($result-> num_rows > 0){
               while($row = $result-> fetch_assoc()){
                  echo "<tr><td>" . $row["id"] . "<td>" . $row["name"] . "<td>" . $row["number"] . "<td>" . $row["course"] .
                  "<td>" . $row["payment"] . "<td>" . $row["education"] . "<td>" . $row["email"] . "<td>" . $row["password"] . "<tr>";

               }
               echo "</table>";
            } 
            else{
               echo "0 result";
            }
            $conn-> close();
           ?>
      </table>
   </div>
</body>
</html>
