<?php 
include 'dbconnect.php';

date_default_timezone_set('America/Los_Angeles');

$title = $_REQUEST['title'];
$sender = $_REQUEST['sender'];
$receiver = $_REQUEST['receiver'];
$message = $_REQUEST['message'];
$date = date("Y-m-d");
$time = date("H:i");
$checked = 0;

$query = mysqli_query($coninfo,"INSERT INTO Messages (Title,Sender,Receiver,Message,Date,Time,Checked) VALUES ('" . $title . "','" . $sender . "','" . $receiver . "','" . $message . "','" . $date . "','" . $time . "','" . $checked . "')");
header('Location: http://portal.businessonmarketst.com/user-hud.php');


?>