<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php 
	$db = mysqli_connect("localhost", "root", "", "test");
	$read = mysqli_query($db, "SELECT * FROM `wp_options`");
	$i = 1;
	?>
	<table class="table">
		<thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Value</th>
		      <th scope="col">Auto-Load</th>
		    </tr>
	    </thead>
		<?php while ($row = mysqli_fetch_array($read)): ?>
			<tbody>
				<tr>
					<th scope="row"><?php echo $i ?></th>
					<td><?php echo $row['option_name'] ?></td>
					<td><?php echo $row['option_value'] ?></td>
					<td><?php echo $row['autoload'] ?></td>
				</tr>
			</tbody>
		<?php $i++; endwhile; ?>
	</table>
</body>
</html>