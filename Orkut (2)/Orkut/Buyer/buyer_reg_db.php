
<?php include 'header.php'; ?>

<?php

session_start();
$db = mysqli_connect("localhost", "root", "", "orkut");
$cmpy = $_POST['cmpy'];
$country = $_POST['country'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$add3 = $_POST['add3'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
$role = $_POST['role'];
$terms = $_POST['terms'];
$privacy = $_POST['privacy'];


$sql = "INSERT INTO buyer_signup (cmpy, country, add1, add2, add3, city, state, zip, first, last, email, pass, rpass, role,
 terms, privacy) VALUES ('$cmpy', '$country', '$add1', '$add2', '$add3', '$city', '$state', '$zip', '$first', '$last', '$email',
 '$pass', '$rpass', '$role', '$terms', '$privacy')";
$result = mysqli_query($db,$sql);

if($result){
    echo "DATA  INSERTED";
}else{
    echo $db->error;
}

?>