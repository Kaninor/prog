<div class="a4-page">
	<h2 class="header">Dariush Rouhifard</h2>
	<hr><br>
	<table>
	  <tr>
	    <th>Object</th>
	    <th>Status</th>
	    <th>Time</th>
	  </tr>
	  <?php 
	  include_once 'db.php';
	  $read = mysqli_query($db, "SELECT * FROM `dariush kaninor`"); 
	  ?>
	  <?php for ($i=1; $i <= 14; $i++): ?>
	  	<?php 
	  	$row = mysqli_fetch_array($read);
	  	?>
	  	<tr>
	    	<td><?php echo $row['obj']; ?></td>
	    	<td><?php echo $row['stat']; ?></td>
	    	<td><?php echo $row['time']; ?></td>
	  	</tr>
	  <?php endfor; ?>
	</table><br><br>

	<footer>© Kaninor Company</footer>
</div>