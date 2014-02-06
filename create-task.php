<?php include 'header.php'; ?>
<?php if ($permissions[5] == 1) { ?>
<?php if ($_COOKIE['BMS_Portal']) { ?>
<div class="row">
<div class="create-account-panel">
<form method="POST" action="actions/createtask.php">
<p>Task Name</p>
<input type="text" name="taskid">
<p>Client</p>
<select name="client">
<?php
$clients = mysqli_query($coninfo,"SELECT ClientName FROM Clients");
while ($row = mysqli_fetch_assoc($clients)) { ?>
<option value="<?php echo $row['ClientName'] ?>"><?php echo $row['ClientName'] ?></option>
<?php } ?>
</select>
<p>Assigned to</p>
<select name="assigned">
<?php 
include ('dbconnect.php');
$users = mysqli_query($coninfo,"SELECT Username,FirstName,LastName FROM Users"); 
while ($row = mysqli_fetch_assoc($users)) { ?>
<option value="<?php echo $row['Username'] ?>"><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?></option>
<?php } ?>
</select>
<p>Start Date</p>
<input type="date" name="startdate">
<p>End Date</p>
<input type="date" name="enddate">
<p>Note</p>
<textarea name="note"></textarea>
<input type="hidden" name="assigner" value="<?php echo $_COOKIE['BMS_Portal']; ?>">
<input type="submit">
</form>
</div>
</div>
<?php } else { 
header('Location: http://portal.businessonmarketst.com/login.php');
}
} ?>

<?php include 'footer.php'; ?>