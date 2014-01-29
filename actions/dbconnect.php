<?php
// Create connection
$coninfo=mysqli_connect("localhost","ltfas10k_portal","10201991","ltfas10k_bmsportal");

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>