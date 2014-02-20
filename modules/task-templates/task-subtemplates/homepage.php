<p>Homepage Creation</p>
<br />
<div class="single-template-task">
<p>Draft</p>
<p>Assigned to:</p>
<select id="draft-assigned">
<?php 
include ('dbconnect.php');
$users = mysqli_query($coninfo,"SELECT Username,FirstName,LastName FROM Users"); 
while ($row = mysqli_fetch_assoc($users)) { ?>
<option value="<?php echo $row['Username'] ?>"><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?></option>
<?php } ?>
</select>
<p>Start Date</p>
<input type="date" name="draft-startdate" id="draft-startdate">
<p>End Date</p>
<input type="date" name="draft-enddate" id="draft-enddate">
<p>Note</p>
<textarea name="draft-note" id="draft-note"></textarea>
</div>
<br /><br />
<div class='single-template-task'>
<p>Design</p>
<p>Assigned to:</p>
<select id="design-assigned">
<?php 
include ('dbconnect.php');
$users = mysqli_query($coninfo,"SELECT Username,FirstName,LastName FROM Users"); 
while ($row = mysqli_fetch_assoc($users)) { ?>
<option value="<?php echo $row['Username'] ?>"><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?></option>
<?php } ?>
</select>
<p>Start Date</p>
<input type="date" name="design-startdate" id="design-startdate">
<p>End Date</p>
<input type="date" name="design-enddate" id="design-enddate">
<p>Note</p>
<textarea name="design-note" id="design-note"></textarea>
</div>
<br /><br />
<div class="single-template-task">
<p>Development</p>
<p>Assigned to:</p>
<select id="development-assigned">
<?php 
include ('dbconnect.php');
$users = mysqli_query($coninfo,"SELECT Username,FirstName,LastName FROM Users"); 
while ($row = mysqli_fetch_assoc($users)) { ?>
<option value="<?php echo $row['Username'] ?>"><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?></option>
<?php } ?>
</select>
<p>Start Date</p>
<input type="date" name="development-startdate" id="development-startdate">
<p>End Date</p>
<input type="date" name="development-enddate" id="development-enddate">
<p>Note</p>
<textarea name="development-note" id="development-note"></textarea>
</div>