<?php include 'header.php'; ?>
<div class="row">
        <div class="send-message-panel">
<form method="POST" action="actions/sendmessage.php">
<p>Title of Message</p>
<input name="title" type="text">
<p>Send to</p>
<select name="receiver">
<?php 
include ('dbconnect.php');
$users = mysqli_query($coninfo,"SELECT Username,FirstName,LastName FROM Users"); 
while ($row = mysqli_fetch_assoc($users)) { ?>
<option value="<?php echo $row['Username'] ?>"><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?></option>
<?php } ?>
</select>
<p>Message</p>
<textarea name="message"></textarea>
<input type="hidden" name="sender" value="<?php echo $_COOKIE['BMS_Portal']; ?>">
<input type="submit">
</form>
</div>	
</div>
<?php include 'footer.php'; ?>