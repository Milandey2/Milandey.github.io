<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer & Login</title>

    <style>
        :root {
  --gradient: linear-gradient(
    45deg, 
    #845ec2,
    #d65db1,
    #ff6f91,
    #ff9671,
    #ff6f91,
    #d65db1,
    #845ec2)
}

body {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2em;
}

.btn {
  cursor: pointer;
  padding: 2em 4em;
  font-size: 1.125rem;
  text-transform: uppercase;
  font-weight: bold;
  color: white;
  border: none;
  border-radius: 0.5em;
  background: var(--gradient);
  background-size: 300%;
  background-position: left;
  transition: 400ms ease;
}

.btn-1:hover, 
.btn-2:hover,
.btn-1:focus, 
.btn-2:focus{
  background-position: right;
  box-shadow: 0px 15px 30px -10px rgba(0,0,0,0.4);
  border: 0.5px solid white;
}

.btn-1:active,
.btn-2:active {
  background-position: right;
  box-shadow: 0px 10px 20px -5px rgba(0,0,0,0.1);
  border: 0.5px solid white;
}

.btn-2 {
  animation: bg-animation 4s infinite alternate;
}

@keyframes bg-animation {
  0% {background-position: left}
  100% {background-position: right}
}
    </style>
</head>
<body style="background: #d1cfcf;">
   
<center><h3>Are you a ?</h3>
        <br><br><br>


            <a href="Supply/supply_login.php"><button class="btn btn-1">Supplier</button></a>
          
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
            <a href="Buyer/buyer_login.php"><button class="btn btn-2">Buyer </button></a>
            
            </center>
</body>
</html>