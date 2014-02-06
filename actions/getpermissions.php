<?php 
include 'dbconnect.php';
if ($_COOKIE['BMS_Portal']) {

$queri = mysqli_query($coninfo,"SELECT Role FROM Users WHERE Username='" . $_COOKIE['BMS_Portal'] . "'"); 
while($row = mysqli_fetch_assoc($queri)) {
    $role = $row['Role'];
}


$query = mysqli_query($coninfo,"SELECT Permissions FROM Roles WHERE Roles='" . $role . "'");
while($row = mysqli_fetch_assoc($query)){
    $permissions = $row['Permissions'];
}

}

?>