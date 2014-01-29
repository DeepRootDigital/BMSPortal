<div class="tasks-module">
	<div class="task-sorting">
		<p>Sort by:</p>
		<select id="sort-choice">
			<option value="self">Self</option>
			<option value="others">Other Users</option>
			<option value="date">Date</option>
			<option value="client">Client</option>
		</select>
	</div>
	<div class="user-select">
		<p>Select User:</p>
		<select id="user-select">
<?php 
include ('dbconnect.php');
$users = mysqli_query($coninfo,"SELECT Username,FirstName,LastName FROM Users"); 
while ($row = mysqli_fetch_assoc($users)) { ?>
<option value="<?php echo $row['Username'] ?>"><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?></option>
<?php } ?>
		</select>
	</div>
        <div class="client-select">
		<p>Select Client:</p>
		<select id="client-select">
<?php
$clients = mysqli_query($coninfo,"SELECT ClientName FROM Clients");
while ($row = mysqli_fetch_assoc($clients)) { ?>
<option value="<?php echo $row['ClientName'] ?>"><?php echo $row['ClientName'] ?></option>
<?php } ?>
		</select>
	</div>
	<div class="task-content">
<?php
function taskquery($database,$sorttype,$sortoption){
			$result = mysqli_query($database,"SELECT * FROM Tasks WHERE Assigned='" . $sortoption . "'");
                        while($row = mysqli_fetch_array($result)) { 
?>
                <div class="single-task">
			<p class="task-name"><?php echo $row['Client']; ?></p>
			<p class="task-duedate"><?php echo $row['EndDate']; ?></p>
			<p class="task-client"><?php echo $row['Status']; ?></p>
			<p class="task-note"><?php echo $row['Note']; ?></p>
		</div>
<?php                   }
 
	}

taskquery($coninfo,"self",$_COOKIE['BMS_Portal']);
?>
	</div>
</div>