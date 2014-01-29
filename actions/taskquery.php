<?php

include ('dbconnect.php');
	function taskquery($database,$sorttype,$sortoption){
		if ($sorttype == "others") {
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
		} else if ($sorttype == "client") {
                        $result = mysqli_query($database,"SELECT * FROM Tasks WHERE Client='" . $sortoption . "'");
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
	}

$sorttype = $_REQUEST['sorttype'];
$sortoption = $_REQUEST['sortoption'];
taskquery($coninfo,$sorttype,$sortoption);

?>