
<?php include 'header.php'; ?>

<?php

session_start();
$db = mysqli_connect("localhost", "root", "", "orkut");
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM buyer_signup WHERE email='$user' && pass='$pass'";
$result = mysqli_query($db,$sql);
$array = mysqli_fetch_assoc($result);

if($array){
    header('Location: profile.php');
    $_SESSION['user']=$user;
}else{
    echo $db->error;
    echo "<br>";
    echo "Login Unsuccess";
}

?>