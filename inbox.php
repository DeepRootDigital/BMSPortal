<?php include 'header.php'; ?>
<?php if ($_COOKIE['BMS_Portal']) { ?>
<div class="row">
<div class="inbox-panel">
<div class="inbox-nav">
<a href="#" class="messagelink messageid-all">Inbox</a>
<a href="sendmessage.php">Send New Message</a>
</div>
<div class="inbox-content">
<?php
$msgs = mysqli_query($coninfo,"SELECT * FROM Messages WHERE Receiver='" . $_COOKIE['BMS_Portal'] . "'");
while ($row = mysqli_fetch_assoc($msgs)) { ?>
<div class="single-message">
<a href="#" class="messagelink messageid-<?php echo $row['ID']; ?>">
<p class="<?php if ($row['Checked'] == 0) { ?>notchecked<?php } ?>"><?php echo $row['Title']; ?></p>
</a>
</div>
<?php } ?>
</div>
</div>
</div>
<?php } else { 
header('Location: http://portal.businessonmarketst.com/login.php');
} ?>

<?php include 'footer.php'; ?>