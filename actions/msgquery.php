<?php

include ('dbconnect.php');
function msgquery($database,$input,$receiver){
	if ($input == "all") {

		$msgs = mysqli_query($database,"SELECT * FROM Messages WHERE Receiver='" . $receiver . "'");
		while ($row = mysqli_fetch_assoc($msgs)) { ?>
		<div class="single-message">
			<a href="#" class="messageid-<?php echo $row['ID']; ?>">
				<p class="<?php if ($row['Checked'] == 0) { ?>notchecked<?php } ?>"><?php echo $row['Title']; ?></p>
			</a>
		</div>
		<?php                   }
	} else {
		$msgs = mysqli_query($database,"SELECT * FROM Messages WHERE Receiver='" . $receiver . "' AND ID='" . $input . "'");
		while ($row = mysqli_fetch_assoc($msgs)) { ?>
		<div class="single-message">
			<a href="#" class="messageid-<?php echo $row['ID']; ?>">
				<p><?php echo $row['Title']; ?></p>
			</a>
			<p>From: <?php echo $row['Sender']; ?></p>
			<p>Sent: <?php echo $row['Date']; ?> <?php echo $row['Time'] ?></p>
			<p>Message: <?php echo $row['Message']; ?></p>
			<a href="reply.php?sendto=<?php echo $row['Sender']; ?>">Reply</a>
		</div>
		<?php                   }
                $update = mysqli_query($database,"UPDATE Messages SET Checked=1 WHERE ID='" . $input . "'");
	}
}

$receiver = $_COOKIE['BMS_Portal'];
$input = $_REQUEST['input'];
msgquery($coninfo,$input,$receiver);

?>