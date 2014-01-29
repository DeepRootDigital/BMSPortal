<?php 
include 'dbconnect.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$password = md5($password);

$query = mysqli_query($coninfo,"SELECT * FROM Users WHERE Username='" . $username . "' AND Password='" . $password . "'");
if (count(mysqli_fetch_assoc($query)) > 0) {
// CREATE COOKIE FOR SESSION
setcookie("BMS_Portal","Colpan",0,'/');
// Redirect to userportal
header('Location: http://portal.businessonmarketst.com/user-hud.php');
} else {
header('Location: http://portal.businessonmarketst.com/login.php');
}


?>