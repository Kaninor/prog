<?php 

if ($_POST['sub'] != null) {
	$user = "Dariush";
	$email = "Dariush@gmail.com";
	$pass = "12345";

	$db = mysqli_connect("localhost","root","","test");
	$register = mysqli_query($db, "INSERT INTO users (userName, email, password) VALUES ('$user', '$email', '$pass')");
}

header('Location: index.php');