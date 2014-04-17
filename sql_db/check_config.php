<?php
include("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name_user'];
$address = $_POST['location'];


$sql = "SELECT * FROM login WHERE "
?>