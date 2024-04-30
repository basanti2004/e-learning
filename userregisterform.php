<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:gray">
<div class="container" style="display:flex;background-color:rgb(218, 206, 208);padding:50px 0px;padding-left:30px;margin-top:50px;margin-left:100px;
    width:50%;margin-left:270px;margin-bottom:50px">
        <div class="myform">
            <form  action="connection.php" method="post">
                <h2 style="text-align:center;color:cadetblue;padding:30px">Register For Course</h2>
                <input type="text" style="width:90%;margin:10px 15px;padding:15px 20px;margin-right:40px;margin-left:30px" name="name" placeholder="full name" required/>
                <input type="text" style="width:90%;margin:10px 15px;padding:15px 20px;margin-right:40px;margin-left:30px" name="number" placeholder="mobile number" required/>
              
                <input type="text" style="width:90%;margin:10px 15px;padding:15px 20px;margin-right:40px;margin-left:30px" name="course" placeholder="course" required/>
              
                  <select class="form-select" style="width:90%;margin:10px 15px;padding:15px 20px;margin-right:40px;margin-left:30px" name="payment" required/>                
  <option selected>Payment Options</option>
  <option value="Gpay">Gpay</option>
  <option value="Phonepay">Phone pay</option>
</select> 

<input type="text" style="width:90%;margin:10px 15px;padding:15px 20px;margin-right:40px;margin-left:30px" name="education" placeholder="current education" required/>

              <input type="email" style="width:90%;margin:10px 15px;padding:15px 20px;margin-right:40px;margin-left:30px" name="email" placeholder="email" required/>
            
                <input type="text" style="width:90%;margin:10px 15px;padding:15px 20px;margin-right:40px;margin-left:30px " name="password" placeholder="password" required/> 
            
                <button style="padding:10px 20px;margin-left:40px;margin-top:30px;background-color:white;
                border:white;font-size:23px;color:black;font-weight:600;border-radius:5px" type="submit">submit</button>
            </form>
        </div>
    </div>
</body>
</html>