<?php include 'header.php'; ?>

<div class="row">
<div class="create-account-panel">
<form method="POST" action="actions/createaccount.php">
<p>Account Type </p>
<select name="accounttype">
    <option value="User">User</option>
    <option value="Client">Client</option>
</select>
<p>Username</p>
<input name="username" type="text" required>
<p>Password</p>
<input name="password" type="password" required>
<p>First Name</p>
<input name="firstname" type="text" required>
<p>Last Name</p>
<input name="lastname" type="text" required>
<p>Role</p>
<select name="role">
    <option value="Wombat">Wombat</option>
    <option value="Other">Other</option>
</select>
<p>Email</p>
<input name="email" type="email" required>
<p>Address</p>
<input name="address" type="text" required>
<p>Phone Number</p>
<input name="phone" type="tel" required>
<input type="submit">
</form>
</div>
</div>

<?php include 'footer.php'; ?>