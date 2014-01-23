<form method="get" action="#">
	<input type="text" name="cname">
	<select name="status">
		<option>Active</option>
		<option>Retired</option>
	</select>
	<input type="submit">
</form>

<?php



$clientMasterList = array();
setcookie("TestCookie", serialize($clientMasterList));


$newDataBuffer = array();
if (isset($_REQUEST['cname'])) {
	$newDataBuffer['clientname'] = $_REQUEST['cname'];
}

if (isset($_REQUEST['status'])) {
	$newDataBuffer['clientstatus'] = $_REQUEST['status'];
}

$clientMasterList[] = $newDataBuffer;

print_r($_COOKIE['TestCookie']);

function DisplayClients() {
	$clientData = unserialize($_COOKIE['TestCookie']);

	print_r($clientData);
}

DisplayClients();

?>