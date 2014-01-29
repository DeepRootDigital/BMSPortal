<?php include 'header.php'; ?>
<div class="row">
<div class="login-panel">
<form method="POST" action="actions/login.php">
<p>Username</p>
<input name="username" type="text" required>
<p>Password</p>
<input name="password" type="password" required>
<input type="submit">
</form>
</div>
</div>
<?php include 'footer.php'; ?>