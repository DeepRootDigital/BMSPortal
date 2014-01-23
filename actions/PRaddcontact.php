<?php

include 'dbconnect.php';

$requestData = array();

$requestData['fname'] = $_REQUEST['fname'];
$requestData['lname'] = $_REQUEST['lname'];
$requestData['company'] = $_REQUEST['company'];
$requestData['email'] = $_REQUEST['email'];
$requestData['phone'] = $_REQUEST['phone'];
$requestData['twitterurl'] = $_REQUEST['twitterurl'];
$requestData['facebookurl'] = $_REQUEST['facebookurl'];

$sql = "INSERT INTO prmanager (FirstName, LastName, Company, twitterURL, facebookURL, email, phoneNumber) VALUES ('$requestData[fname]','$requestData[lname]','$requestData[company]','$requestData[twitterurl]','$requestData[facebookurl]','$requestData[email]','$requestData[phone]')";

		// Execute query
mysqli_query($coninfo,$sql);

?>