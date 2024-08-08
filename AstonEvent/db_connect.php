<?php
$host ="localhost";
	$username = "root";
	$password = "";
	$database = "aston_event";

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo $mysqli->host_info . "<br>";
?>