<?php

function prshowdata($coninfo) {

	$sql = "SELECT * FROM  prmanager";

	$result = mysqli_query($coninfo, $sql);

	echo '<table>';
	echo '<thead>';
	echo '<tr><td>Name</td><td>Company</td><td>Email</td><td>Phone</td><td>Twitter</td><td>Facebook</td></tr>';
	echo '</thead>';
	echo '<tbody>';
	while($row = mysqli_fetch_array($result))
	{
		echo '<tr>';
		echo '<td>';
		echo $row['FirstName'] . " " . $row['LastName'];
		echo '</td>';
		echo '<td>';
		echo $row['Company'];
		echo '</td>';
		echo '<td>';
		echo $row['email'];
		echo '</td>';
		echo '<td>';
		echo $row['phoneNumber'];
		echo '</td>';
		echo '<td>';
		echo $row['twitterURL'];
		echo '</td>';
		echo '<td>';
		echo $row['facebookURL'];
		echo '</td>';
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
}

?>