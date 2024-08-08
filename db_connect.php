<?php
$host ="localhost";
	$username = "u-200216768";
	$password = "C9h9lewOPY4Ihle";
	$database = "u_200216768_db";

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo $mysqli->host_info . "<br>";
?>