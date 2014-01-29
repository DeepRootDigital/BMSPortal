<!DOCTYPE html>
<html>
<?php include 'functions.php'; ?>
<head>
	<title>BMS Master Control Panel v1.0</title>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/8732fb8c-7669-455f-a795-b783768d6394.js"></script>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="master-ball">
                <div class="master-ball-quicklinks">
                    <?php if ($_COOKIE['BMS_Portal']) { ?>
                        <a href="#" class="mb-logout">Logout</a>
                        <a href="http://portal.businessonmarketst.com/create-task.php">New Task</a>
                        <a href="http://portal.businessonmarketst.com/user-hud.php">User HUD</a>
                    <?php } else { ?>
                        <a href="http://portal.businessonmarketst.com/login.php" class="mb-login">Login</a>
                        <a href="http://portal.businessonmarketst.com/create-account.php">Create Account</a>
                    <?php } ?>
                </div>
        </div>
	<div class="container">
		<div class="header">
			<img src="images/logo.png">
			<h1>Autocracy Control System</h1>
		</div>
<!--
		<div class="viewtypes">
			<img class="bd" src="images/bd.png">
			<img src="images/branding.png">
			<img src="images/webdev.png">
		</div>
-->