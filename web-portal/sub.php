<?php
//echo "Email : ".$_GET['email']." and description : ".$_GET['description'];

//the variables to be put in
$host = $_GET['host'];
$os = $_GET['os'];
$user = $_GET['user'];
$serial_no = $_GET['serial_no'];
$model = $_GET['model'];

$db = mysqli_connect("localhost","id4926554_toughnickel","nikhil@443*","id4926554_log") or die("Failed to connect");
$sql = "INSERT INTO entries (host,os,user,serial_no,model) values ('$host','$os','$user','$serial_no','$model')";
if(mysqli_query($db,$sql)){
    echo "\nRecord Added successfully";
}else{
    echo "\nFailed Badly!!";
}
?>
