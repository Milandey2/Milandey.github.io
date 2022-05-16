
<?php


$db = mysqli_connect("localhost","root","","company_profile");
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$linkedin = $_POST['linkedin'];

$sql = "INSERT INTO marketing (facebook, twitter, linkedin) VALUES ('$facebook','$twitter','$linkedin')";

$result = mysqli_query($db, $sql);
if($result){
    echo "DATA INSERTED";
}else{
    echo $db->error;
}

?>