<form action="actions/fileserverupload.php" method="POST" enctype="multipart/form-data">
	<label for="file">Upload file:</label>
	<input type="file" name="file" id="file"><br>
        <label for="file">Who is this for:</label>
	<select name="target" id="target">
<?php 
include ('../actions/dbconnect.php');
$users = mysqli_query($coninfo,"SELECT Username,FirstName,LastName FROM Users"); 
while ($row = mysqli_fetch_assoc($users)) { ?>
<option value="<?php echo $row['Username'] ?>"><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?></option>
<?php } ?>
	</select><br />
        <label for="file">For which client?</label>
	<select name="client" id="client">
<?php
$clients = mysqli_query($coninfo,"SELECT ClientName FROM Clients");
while ($row = mysqli_fetch_assoc($clients)) { ?>
<option value="<?php echo $row['ClientName'] ?>"><?php echo $row['ClientName'] ?></option>
<?php } ?>
		</select>
	<input type="submit" name="submit" value="Submit">
</form>