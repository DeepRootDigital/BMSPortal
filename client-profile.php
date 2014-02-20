<?php include 'header.php'; ?>
<?php if ($permissions[2] == 1) { ?>
<?php $id = $_REQUEST['client']; 
$client = mysqli_query($coninfo,"SELECT * FROM Clients WHERE ID='" . $id . "'"); 
while ($row = mysqli_fetch_assoc($client)) { ?>
<h2><?php echo $row['ClientName']; ?></h2>
<?php 
$clientname = $row['ClientName'];
$select = $row['Status'];
$accexec = $row['AccountExec'];
$contactname = $row['ContactName'];
$email = $row['Email'];
$phone = $row['Phone'];
$url = $row['URL'];
$testurl = $row['TestURL'];
$note = $row['Notes'];
$hosturl = $row['HostURL'];
$hostuser = $row['HostUser'];
$hostpw = $row['HostPW'];
$wpuser = $row['WPUser'];
$wppw = $row['WPPW'];
} ?>
<ul>
	<li>
		Status: 
		<select>
			<option<?php if ($select == 'Active') { ?> selected <?php } ?>>Active</option>
			<option<?php if ($select == 'Retired') { ?> selected <?php } ?>>Retired</option>
		</select>
	</li>
	<li>
<?php $client = mysqli_query($coninfo,"SELECT ID FROM Tasks WHERE Client='" . $clientname . "'"); 
$total = 0;
while ($row = mysqli_fetch_assoc($client)) {
$total = $total + 1; 
}
$client = mysqli_query($coninfo,"SELECT ID FROM Tasks WHERE Client='" . $clientname . "' AND Status='Complete'");
$complete = 0;
while ($row = mysqli_fetch_assoc($client)) {
$complete = $complete + 1;
}
$math = floor(($complete / $total) * 100);
?>
		Completion Status: <progress value="<?php echo $math; ?>" max="100"></progress>
	</li>
	<li>Account Executive: <?php echo $accexec; ?></li>
</ul>
<div class="row">
	<h2>Action Center</h2>
	<div class="col-half">
		<h3>Point of Contact:</h3>
		<ul>
			<li>Name: <?php echo $contactname; ?></li>
			<li>Phone: <?php echo $phone; ?></li>
			<li>Email: <?php echo $email; ?></li>
			<li>URL: <?php echo $url; ?></li>
		</ul>
	</div>
	<div class="col-half">
		<h3>Work Summary:</h3>
		<p><?php echo $note; ?></p>
	</div>
</div>
<div class="row">
	<div class="col-half">
            <h3>Task List: </h3>
	    <div class="task-content">
                <?php
                    function taskquery($database,$sorttype,$sortoption){
			$result = mysqli_query($database,"SELECT * FROM Tasks WHERE Client='" . $sortoption . "'");
                        while($row = mysqli_fetch_array($result)) { 
                ?>
                <div class="single-task">
			<p class="task-name"><?php echo $row['TaskID']; ?></p>
			<p class="task-duedate"><?php echo $row['EndDate']; ?></p>
			<p class="task-client"><?php echo $row['Status']; ?></p>
			<p class="task-note"><span>Details:</span> <?php echo $row['Note']; ?></p>
		</div>
                <?php                   }
	        }
                taskquery($coninfo,"Client",$clientname);
                ?>
	</div>
</div>
	<div class="col-half">
		<h3>Update the Client:</h3>
 <!--
		<ul>
			<li>
				Send a Report:
				<select>
					<option>Web Maintinence Report</option>
					<option>SEO Report</option>
					<option>Hubspot Report</option>
				</select>
			</li>
			<li>
				Send Update Notifications:
				<button>Peer Review Panel</button>
			</li>
			<li>
				Email : 
				<button>Beth@MaltaDev.com</button>
			</li>
		</ul>
-->
	</div>
</div>
<div class="row">
	<h2>Assets and Reports</h2>
	<div class="col">
		<h3>Digital Assets:</h3>
		<ul>
			<li><a href="<?php echo $url; ?>"><img src="images/urlicon.png">Live website</a></li>
			<li><a href="<?php echo $testurl; ?>"><img src="images/urlicon.png">Testing website</a></li>
<?php
$mediaquery = mysqli_query($coninfo,"SELECT Filename,Filelocation FROM FileServer WHERE Client='" . $clientname . "'"); 
while ($row = mysqli_fetch_assoc($mediaquery)) { ?>
<li><a href="<?php echo $row['Filelocation']; ?>"><?php echo $row['Filename']; ?></a></li>
<?php } ?>
		</ul>
	</div>
	<div class="col">
		<h3>Notifications History:</h3>
		<ul>
			<li>Hubspot Report for 12/15/2014</li>
			<li>Maintinence Report 12/15/2014</li>
		</ul>
	</div>
	<div class="col webdev">
		<h3>Systems Credentials:</h3>
		<ul>
			<li>
				HOST URL: <a href="<?php echo $hosturl; ?>"><?php echo $hosturl; ?></a><br/>
				HOST Username: <?php echo $hostuser; ?><br/>
				HOST Password: <?php echo $hostpw; ?>
			</li>
                        <li>
				WP Username: <?php echo $wpuser; ?><br/>
				WP Password: <?php echo $wppw; ?>                        
                        </li>
		</ul>
	</div>
</div>
<?php } ?>
<?php include 'footer.php'; ?>