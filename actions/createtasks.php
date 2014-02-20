<?php 
include 'dbconnect.php';

$taskid = $_REQUEST['taskid'];
$client = $_REQUEST['client'];
$assigner = $_REQUEST['assigner'];
$assigned = $_REQUEST['assigned'];
$startdate = $_REQUEST['startdate'];
$enddate = $_REQUEST['enddate'];
$status = "Active";
$note = $_REQUEST['note'];

$query = mysqli_query($coninfo,"INSERT INTO Tasks (TaskID,Client,Assigner,Assigned,StartDate,EndDate,Status,Note) VALUES ('" . $taskid . "','" . $client . "','" . $assigner . "','" . $assigned . "','" . $startdate . "','" . $enddate . "','" . $status . "','" . $note . "')");
header('Location: http://portal.businessonmarketst.com/user-hud.php');


?>