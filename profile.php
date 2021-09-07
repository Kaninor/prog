<?php
$db = mysqli_connect("localhost", "root", "", "test");
$read = mysqli_query($db, "SELECT * FROM objects WHERE Id = 13");
$row = mysqli_fetch_array($read);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= $row['name']; ?></title>
</head>
<body>
  <h1>Welcome <?= $row['name']; ?></h1>
  <h2>Email: <?= $row['obj']; ?></h2>
  <h3>Password: <?= $row['stat']; ?></h3>
  <h4>Password Confirm: <?= $row['time']; ?></h4>
</body>
</html>
