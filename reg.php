<?php
$db = mysqli_connect("localhost", "root", "", "test");

$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pass_conf = $_POST['pass_conf'];

$register = mysqli_query($db, "INSERT INTO objects (name, obj, stat, time) VALUES ('$user', '$email', '$pass', '$pass_conf')");

header("location: register.php");
