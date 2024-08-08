<html lang="en">
	<head>
		 <meta charset="utf-8">
        <title>Aston Event</title>
        <link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/fontawesome/css/all.css">
		<link rel="shortcut icon" href="image/Aston.ico">
	</head>
<body>

<header> 
            <div class="container"> 
                 <div id="logo">
            <div id="logoImg">
               <img src="image/Astonlogo.jpg " width="42px">
            </div>
          <a href="indexAE.php">ASTON EVENT</a>
        </header>
        <!--endheader-->
        <div class="body">
      <div class="container"> 
        <div id="menu">
                  <ul>
                     <li><a  id="current" href="indexAE.php">HOME PAGE</a></li>
                      <li><a href="login.php">LOG-IN</a></li>
                      <li><a href="register_new_user.php" >SIGN-UP</a></li>
                      <li><a href="add_event_form.php">CREATE EVENT</a></li>
                  </ul>
          </br>
              </div>

<?php
include "db_connect.php";

$email = $_GET["Email"];
$event = $_GET["event"];

$email = addslashes($email);
$event = addslashes($event);

echo "<h2>$email booked. </h2>";
$sql = "INSERT INTO booking (email, event)
VALUES ('$email','$event');";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

//include "search_all.php";
?>

<a href = "indexAE.php"> Return to main page</a>

</body>
</html>