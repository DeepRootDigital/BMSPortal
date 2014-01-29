<?php

include ('dbconnect.php');
	function clientquery($database,$sortoption){
               if ($sortoption == "All") {
                       $result = mysqli_query($database,"SELECT ClientName,Status FROM Clients");
               } else {
			$result = mysqli_query($database,"SELECT ClientName,Status FROM Clients WHERE Status='" . $sortoption . "'");
               }
                        while($row = mysqli_fetch_array($result)) { 
?>
                <li><a href="http://portal.businessonmarketst.com/client-profile.php?client=<?php echo $row['ID'] ?>"><?php echo $row['ClientName'] ?></a></li>
<?php                   }
	}

$sortoption = $_REQUEST['sortoption'];
clientquery($coninfo,$sortoption);

?>