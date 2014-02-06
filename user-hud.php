<?php include 'header.php'; ?>
<div class="row">
<?php if ($permissions[1] == 1) { ?>
	<div class="col">
		<?php include 'modules/tasks-list.php'; ?>
	</div>
	<div class="col">
		<?php include 'modules/client-list.php'; ?>
	</div>
	<div class="col">
		<h2>Alerts</h2>
		<ul>
			<li>1/8/2014 - By Nick Koskowski, Systems Integrations for Malta Development finished.</li>
			<li>11/4/2013 - By Sara Childress, Please send timesheets by 3:00PM</li>
			<li>12/1/2013 - By Bob Afsari, Company Xmas Party on Saturday.</li>
		</ul>
	</div>
<?php } ?>
</div>
<?php include 'footer.php'; ?>