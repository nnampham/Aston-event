<?php
include "db_connect.php";

$new_username = $_POST['username'];
$new_pw = $_POST['pw'];
$new_pw1 = $_POST['pw1'];

echo "<h2>Trying to register new user:".$new_username."</h2>";

//check 2 passwords
if($new_pw != $new_pw1 ){
	echo "The passwords do not match. Please try again";
	exit;
}
 
 //pw enforcement
preg_match('/[0-9]+/', $new_pw, $matches);
if(sizeof($matches) == 0){
	echo "The password must have at least one number";
	exit;
}

if(strlen($new_pw)<6){
	echo "The password must have at least 6 digits";
	exit;
}

//check existing user
$sql = "SELECT*FROM user WHERE USERNAME = '$new_username'";
$result = $mysqli->query($sql) or die (mysqli_error($mysqli));
if($result ->num_rows >0){
	echo "The username ".$new_username." alredy existed";
	echo "<a href='index.php'> Return to main page </a>";
	exit;
}

//insert new user into db
$sql = "INSERT INTO user(id, USERNAME,PASSWORD) VALUES (null,'$new_username','$new_pw')";
$result = $mysqli->query($sql) or die (mysqli_error($mysqli));
if($result){
	echo "Successfully registered user".$new_username;
}else{
	echo "Failed";
}

echo "<a href='index.php'> Return to main page </a>";
?>
