<?php include 'header.php'; ?>
<h2>BMS Email Spoofer</h2>
<form action="actions/emailer.php">
	<label>Name:</label>
	<input type="text" name="name">
	<label>From:</label>
	<input type="email" name="from">
	<label>Subject:</label>
	<input type="text" name="subject">
	<label>Message:</label>
	<textarea name="message">
	</textarea>
	<input type="submit">
</form>
<?php include 'footer.php'; ?>