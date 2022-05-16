<?php


$db = mysqli_connect("localhost","root","","company_profile");
$company = $_POST['company'];
$other = $_POST['other'];
$network = $_POST['network'];
$desc = $_POST['desc'];
$web = $_POST['web'];
$privacy = $_POST['privacy'];
$postal = $_POST['postal'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$add1 = $_POST['address1'];
$add2 = $_POST['address2'];
$add3 = $_POST['address3'];
$product = $_POST['product'];
$ship = $_POST['ship'];
$keyword = $_POST['keyword'];


$sql = "INSERT INTO basic (company, others, network, descrip, web, privacy, postal, country, state, city, add1, add2, add3, 
product, ship, keyword) VALUES ('$company','$other','$network','$desc','$web','$privacy','$postal','$country','$state','$city',
'$add1','$add2','$add3','$product','$ship','$keyword')";

$result = mysqli_query($db, $sql);
if($result){
    echo "DATA INSERTED";
}else{
    echo $db->error;
}

?>