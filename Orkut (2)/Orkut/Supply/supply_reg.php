<?php include 'header.php';
      include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

<style>
    
</style>

</head>
<body style="background-color: #D9E6F7;">
<br><br>    
<div class="container">
    <!-- <div class="row"> -->
        <div class="col-lg-4 ">
            <!-- <img src="img/sign.jpg" alt="" width="120%" > -->
        </div>

    <div class="col-lg-2">

    </div>

        <div class="col-lg-6">
            <div class="logo">
                <img src="img/logo1.png" width="50%" alt="">
            </div>
            <!-- <h3 style="color: #89CFF0;">Create a free company account to connect with your customers on SAP Business Network</h3> -->

<br><br>
            <h4>Company information</h4> <a href="#"></a>
            <br><br>
            <form method="POST" action="supply_reg_db.php">
            <label style="color:#000; color: #759CCF; width: 93%;">Company (legal) name *</label><br>
            <input type="text" name="cmpy" required="" style="padding: 4px; padding-right: 300px;  border:3px solid #759CCF;">

            <br><br>
            <label style="color:#000; color: #759CCF; width: 93%;">Country/Region *</label><br>
            <input type="text" name="country" required="" style="padding: 4px; padding-right: 300px; border:3px solid #759CCF;">

            <br><br>
            <label style="color:#000; color: #759CCF; width: 93%;">Address line 1 *</label><br>
            <input type="text" name="add1" required="" style="padding: 4px; padding-right: 300px; border:3px solid #759CCF;">

            <br><br>
            <label style="color:#000; color: #759CCF; width: 93%;">Address line 2 *</label><br>
            <input type="text" name="add2" required="" style="padding: 4px; padding-right: 300px; border:3px solid #759CCF;">

            <br><br>
            <label style="color:#000; color: #759CCF; width: 93%;"> Address line 3 *</label><br>
            <input type="text" name="add3" required="" style="padding: 4px; padding-right: 300px; border:3px solid #759CCF;">

            <br><br>
            <label style="color:#000; color: #759CCF; width: 93%;">City</label><br>
            <input type="text" name="city" required="" style="padding: 4px; padding-right: 300px; border:3px solid #759CCF;">

            <br><br>
            <label style="color:#000; color: #759CCF; width: 93%;">State *</label><br>
            <input type="text" name="state" required="" style="padding: 4px; padding-right: 300px; border:3px solid #759CCF;">

            <br><br>
            <label style="color:#000; color: #759CCF; width: 93%;">Zip *</label><br>
            <input type="text" name="zip" required="" style="padding: 4px; padding-right: 300px; border:3px solid #759CCF;">

            <br><br>

            <h4>Administrator account information</h4> <a href="#"></a>

            <div class="row">
                <div class="col-lg-6">
                <br>
            <label style="color:#000; color: #759CCF; width: 110%;">First name *</label><br>
            <input type="text" name="first" required="" style="padding: 3px; padding-right: 40px; border:3px solid #759CCF;">
                </div>

                <div class="col-lg-6">
                <br>
            <label style="color:#000; color: #759CCF; width: 86%;">Last name *</label><br>
            <input type="text" name="last" required="" style="padding: 3px; padding-right: 25px; border:3px solid #759CCF;">
                </div>
            </div>

            <br>
            <label style="color:#000; color: #759CCF; width: 93%;">Email *</label><br>
            <input type="text" name="email" required="" style="padding: 3px; padding-right: 300px; border:3px solid #759CCF;">



            <div class="row">
                <div class="col-lg-6">
                <br>
            <label style="color:#000; color: #759CCF; width: 110%;">Password *</label><br>
            <input type="text" name="pass" required="" style="padding: 3px; padding-right: 40px; border:3px solid #759CCF;">
                </div>

                <div class="col-lg-6">
                <br>
            <label style="color:#000; color: #759CCF; width: 86%;">Repeat Password *</label><br>
            <input type="text" name="rpass" required="" style="padding: 3px; padding-right: 25px; border:3px solid #759CCF;">
                </div>
            </div>

            <br>
            <label style="color:#000; color: #759CCF; width: 93%;">Business role *</label><br>
            <input type="text" name="role" required="" style="padding: 3px; padding-right: 300px; border:3px solid #759CCF;">

            <br><br>
            <input type="checkbox" name="terms"> I have read and agree with the <a href="" style = "text-decoration: none;">Terms of use</a>

            <br><br>
            <input type="checkbox" name="privacy"> I hereby agree that SAP Business Network will make parts of my (company) information accessible 
            to other users and the public based on my role within the SAP Business Network and the applicable profile visibility 
            settings. Please see the  <a href="" style = "text-decoration: none;"> Privacy Statement</a> to learn how we process personal data.


            <br><br>
<center>
            <button class="btn btn-primary" style="padding-left: 60px; padding-right: 60px;">Create account</button>

            </center>
            <br><br>
        </div>
    </div>
    </div>
</body>
</html>