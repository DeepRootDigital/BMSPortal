<?php include 'header.php'; ?>
<div class="row">
        <div class="send-message-panel">
<form method="POST" action="actions/sendmessage.php">
<p>Title of Message</p>
<input name="title" type="text">
<p>Reply to:</p>
<p><?php echo $_REQUEST['sendto']; ?></p>
<input type="hidden" name="receiver" value="<?php echo $_REQUEST['sendto']; ?>">
<p>Message</p>
<textarea name="message"></textarea>
<input type="hidden" name="sender" value="<?php echo $_COOKIE['BMS_Portal']; ?>">
<input type="submit">
</form>
</div>	
</div>
<?php include 'footer.php'; ?>