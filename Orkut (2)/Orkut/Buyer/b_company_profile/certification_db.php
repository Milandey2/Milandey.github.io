<?php


$db = mysqli_connect("localhost","root","","company_profile");
$sustain = $_POST['sustain'];
$plan = $_POST['plan'];
$energy = $_POST['energy'];
$carbon = $_POST['carbon'];
$measure = $_POST['measure'];
$GHG = $_POST['GHG'];
$transport = $_POST['transport'];
$other = $_POST['other'];
$small = $_POST['small'];
$women = $_POST['women'];
$minority = $_POST['minority'];
$LGBT = $_POST['LGBT'];
$veteran = $_POST['veteran'];
$ISO = $_POST['ISO'];
$ISO9000 = $_POST['ISO9000'];
$ISO9001 = $_POST['ISO9001'];
$year = $_POST['year'];
$certi = $_POST['certi'];
$year = $_POST['year'];
$issue = $_POST['issue'];
$location = $_POST['location'];
$expiration = $_POST['expiration'];
$TS16949 = $_POST['TS16949'];
$TS16494 = $_POST['TS16494'];
$ISO13485 = $_POST['ISO13485'];
$ISO14000 = $_POST['ISO14000'];
$ISO4001 = $_POST['ISO4001'];
$ISO17025 = $_POST['ISO17025'];
$ISO18000 = $_POST['ISO18000'];
$ISO2000 = $_POST['ISO2000'];
$ISO27001 = $_POST['ISO27001'];
$ISO50001 = $_POST['ISO50001'];
$ISO31000 = $_POST['ISO31000'];
$ISO26000 = $_POST['ISO26000'];
$ISOcom = $_POST['ISOcom'];


$sql = "INSERT INTO certification (sustain, plans, energy, carbonrip, measure, GHG, transport, other, small, women, minority, LGBT, veteran, ISO, ISO9000, ISO9001, year,
 certi, issue, location, TS16949, TS16494, ISO13485, ISO14000, ISO4001, ISO17025, ISO18000, ISO2000, ISO27001, ISO50001, ISO31000, ISO26000, ISOcom) VALUES 
 ('$sustain','$plan','$energy','$carbon','$measure','$GHG','$transport','$other','$small','$women', '$minority','$LGBT','$veteran','$ISO','$ISO9000','$ISO9001',
 '$year', '$certi', '$issue', '$location', '$expiration', '$TS16949', '$TS16494', '$ISO13485', '$ISO14000', '$ISO4001', '$ISO17025', '$ISO18000', 
 '$ISO2000', '$ISO27001', '$ISO50001', '$ISO31000', '$ISO26000', '$ISOcom')";

$result = mysqli_query($db, $sql);
if($result){
    echo "DATA INSERTED";
}else{
    echo $db->error;
}

?>