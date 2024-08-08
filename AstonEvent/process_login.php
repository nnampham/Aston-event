<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta charset="utf-8">
        <title>Aston Event</title>
        <link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/fontawesome/css/all.css">
		<link rel="shortcut icon" href="image/Aston.ico">
	</head>
<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors',1);

include "db_connect.php";

$username = $_POST['username'];
$pw = $_POST['pw'];

echo "<h2>You log in with username: $username </h2>";

echo "<br>";

$stmt = $mysqli->prepare("SELECT id, username, password FROM user WHERE username=? and password=?");
$stmt->bind_param("ss",$username,$pw);

$stmt->execute();
$stmt->store_result();

$stmt->bind_result($userid,$uname,$password);

//$sql = "SELECT id,USERNAME FROM user WHERE username = '$username' AND password = '$pw'";
//$result = $mysqli->query($sql) or die (mysqli_error($mysqli));

   if($stmt->num_rows > 0) {
  // output data of each row
  $row = $stmt->fetch();
 // $userid = $row['id'];
  echo"login succesfully"; 
  $_SESSION['username'] = $uname;
  $_SESSION['userid'] = $userid;
  echo "<br><a href ='index.php'>return to main page</a>";
  }else {
  echo "No user found";
   $_SESSION=[];
   session_destroy();
   echo "<br><a href ='index.php'>return to main page</a>";
}

echo"<pre>";
//print_r($_SESSION);
echo"</pre>";
?>
		</html>