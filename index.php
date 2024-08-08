<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title> Aston Event</title>
	</head>
	<body>
		<header>
			<h1> ASTON EVENT </h1>
			<img src="Aston_University_logo.jpg" width=200></img>
			<form id="sign-id">
				<!-- email field -->
				<label>Username:</label>
				<input placeholder="Email" title="Please enter a Aston email address." pattern=".+(\.ac\.uk.\edu)" required/>
				<!-- password field -->
				<label for="pw">Password:</label>
				<input id="pw" type='password' placeholder="Password" title="Please enter a your password." required/>
				<input type=submit value="sign in"/>
			</form>
		</header>
		<main>
		<?php
	$host ="localhost";
	$username = "root";
	$password = "";
	$database = "aston_event";

$mysqli = new mysqli($host, $username, $password, $database);

echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "user", "password", "database", 3306);

echo $mysqli->host_info . "\n";?>
		</main>
	</body>
</html>