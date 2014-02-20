<form method="POST" action="">
<p>Client</p>
<select name="client">
<?php
$clients = mysqli_query($coninfo,"SELECT ClientName FROM Clients");
while ($row = mysqli_fetch_assoc($clients)) { ?>
<option value="<?php echo $row['ClientName'] ?>"><?php echo $row['ClientName'] ?></option>
<?php } ?>
</select>
<?php include 'task-subtemplates/homepage.php'; ?>
<input type="hidden" name="assigner" value="<?php echo $_COOKIE['BMS_Portal']; ?>">
<input type="submit" class="template-task-submit">
</form>