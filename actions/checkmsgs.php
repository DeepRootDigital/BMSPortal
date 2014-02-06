<?php
include ('dbconnect.php');
$msgs = mysqli_query($coninfo,"SELECT ID FROM Messages WHERE Receiver='" . $_REQUEST['user'] . "' AND Checked=0"); 
$total = 0;
while ($row = mysqli_fetch_assoc($msgs)) {
$total = $total + 1;                        
}
if ($total > 0) {
?>
<div class="inbox-link">
<a href="http://portal.businessonmarketst.com/inbox.php"><?php echo $total; ?> New Messages</a>
</div>
<?php
} else { ?>
<div class="inbox-link">
<a href="http://portal.businessonmarketst.com/inbox.php">Inbox</a>
</div>
<?php 
} 
?>