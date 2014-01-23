<?php
// Create connection
$coninfo=mysqli_connect("localhost","nick","10201991","autocracy");

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Perform Table Setups 


$PRtblsql ="CREATE TABLE PRManager(ID INT,FirstName CHAR(30),LastName CHAR(30),Company CHAR(30),twitterURL CHAR(30), facebookURL CHAR(30), email CHAR(30), phoneNumber CHAR(30))";

// Execute query
mysqli_query($coninfo,$PRtblsql)

?>