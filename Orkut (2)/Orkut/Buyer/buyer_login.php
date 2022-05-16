<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="background-color: #F7D5E6;">
<div class="container">
        <img src="Orkut/Varun/10.png" width="13%">


    <br><br><br><br>
    <center>
    <b style="height: 27px; width: 491px; color: #CE74A3; font-size: 30px; font-weight: 600; line-height: 28px; padding-top: 10px;">Buyer Login</b>
    <br><br><br>
    
      <form action="buyer_login_db.php" method="POST">
        <label for="" style="color: #CE74A3; width: 120px;"><h4>Username </h4> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" autocomplete="off" required="" name="user" style="border: 3px solid #CE74A3; padding: 3px " width="30%" placeholder="Username">
<br><br>
        <label for="" style="color: #CE74A3; width: 120px;"><h4>Password</h4> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password"  autocomplete="off" required="" name="pass"  style="border: 3px solid #CE74A3; padding: 3px " width="30%" placeholder="Password"><br><br>

        <div class="input-box">
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>
<br>
        <a href="#">Forgot my password?</a>
        </form>
        </center>
<br><br>


<hr>

New to SAP Bussiness Network?
<a href="buyer_reg.php">Register Now</a>

 </div>

   




    
</body>
</html>