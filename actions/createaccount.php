<?php 
include 'dbconnect.php';

$type = $_REQUEST['accounttype'];

if ($type == "User") {

$username = $_REQUEST['username'];
$query = mysqli_query($coninfo,"SELECT * FROM Users WHERE Username='" . $username . "'");
if (count(mysqli_fetch_assoc($query)) > 0) {
header('Location: http://portal.businessonmarketst.com/create-account.php');
} else {
$password = $_REQUEST['password'];
$password = md5($password);
$fn = $_REQUEST['firstname'];
$ln = $_REQUEST['lastname'];
$role = $_REQUEST['role'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];

$query = mysqli_query($coninfo,"INSERT INTO Users (Username,Password,FirstName,LastName,Role,Email,Address,Phone) VALUES ('". $username . "','" . $password . "','" . $fn . "','" . $ln . "','" . $role . "','" . $email . "','" . $address . "','" . $phone . "')");
header('Location: http://portal.businessonmarketst.com/login.php');
}

}

?>