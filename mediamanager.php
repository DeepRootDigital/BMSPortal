<?php include 'header.php'; ?>
<h1>Add a New Media Contact</h1>
<form action="actions/PRaddcontact.php" method="get">
	<label>First Name</label>
	<input name="fname" type="text">
	<label>Last Name</label>
	<input name="lname" type="text">
	<label>Company</label>
	<input name="company" type="text">
	<label>Email</label>
	<input name="email" type="text">
	<label>Phone Number</label>
	<input name="phone" type="text">
	<label>Twitter URL</label>
	<input name="twitterurl" type="text">
	<label>Facebook URL</label>
	<input name="facebookurl" type="text">
	<input type="submit">
</form>

<div class="media-contacts">
	<?php
		prshowdata($coninfo);
	?>
</div>


<?php include 'footer.php'; ?>