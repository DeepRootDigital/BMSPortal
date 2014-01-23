<html>
<?php include 'functions.php'; ?>
<head>
	<title>BMS Master Control Panel v1.0</title>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/8732fb8c-7669-455f-a795-b783768d6394.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
	$(document).ready(function(){
		$('.bd').click(function(){
			$('.webdev').hide();
		});
	});
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="images/logo.png">
			<h1>Autocracy Control System</h1>
		</div>
		<div class="viewtypes">
			<img class="bd" src="images/bd.png">
			<img src="images/branding.png">
			<img src="images/webdev.png">
		</div>