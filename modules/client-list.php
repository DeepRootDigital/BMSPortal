<?php if ($permissions[3] == 1) { ?>
<div class="client-module">
	<h2>Clients</h2>
	    <span>Sort by: <a href="#" class="clients-active">Active</a> / <a href="#" class="clients-retired">Retired</a> / <a href="#" class="clients-all">All</a></span>
	    <ul>
		<?php
                    $clients = mysqli_query($coninfo,"SELECT ID,ClientName FROM Clients");
                    while ($row = mysqli_fetch_assoc($clients)) { ?>
                        <li><a href="http://portal.businessonmarketst.com/client-profile.php?client=<?php echo $row['ID'] ?>"><?php echo $row['ClientName'] ?></a></li>
                <?php } ?>
	    </ul>
</div>
<?php } ?>