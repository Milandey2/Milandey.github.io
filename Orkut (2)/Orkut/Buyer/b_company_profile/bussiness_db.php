
<?php


$db = mysqli_connect("localhost","root","","company_profile");
$year = $_POST['year'];
$employ = $_POST['employ'];
$revenue = $_POST['revenue'];
$employ2 = $_POST['employ2'];
$legal = $_POST['legal'];
$dnus = $_POST['dnus'];
$global = $_POST['global'];
$classification = $_POST['classification'];
$type = $_POST['type'];
$taxid = $_POST['taxid'];
$stateid = $_POST['stateid'];
$regionalid = $_POST['regionalid'];
$vatid = $_POST['vatid'];
$registration = $_POST['registration'];
$date = $_POST['date'];



$sql = "INSERT INTO bussiness (year1, employ, revenue, employ2, legal, dnus, global, classification, type, taxid, stateid, regionalid, vatid, 
registration, date) VALUES ('$year','$employ','$revenue','$employ2','$legal','$dnus','$global','$classification','$type','$taxid',
'$stateid','$regionalid','$vatid','$registration','$date')";

$result = mysqli_query($db, $sql);
if($result){
    echo "DATA INSERTED";
}else{
    echo $db->error;
}

?>