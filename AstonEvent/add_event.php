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
										<a href="index.php">ASTON EVENT</a>
									</div>
									<div id="accountName">
										<p> Goodbye! </p>
										<a href="logout.php" alt="Log out">
											<img src="image/logout.png" width="25px"> </a>
										</div>
									</div>
								</header>
								<!--endheader-->
								<div class="body">
									<div class="container">
										<div id="menu">
											<ul>
												<li>
													<a id="current" href="index.php">HOME PAGE</a>
												</li>
												<li>
													<a href="login.php">LOG-IN</a>
												</li>
												<li>
													<a href="register_new_user.php">SIGN-UP</a>
												</li>
												<li>
													<a href="add_event_form.php">CREATE EVENT</a>
												</li>
											</ul>
										</br>
									</div>
									<div id="main-contain">
										<div id="thongtin">
<?php
session_start();
if(! $_SESSION['username']) {
	echo "Only signed in user can create new event. Click <a href='login.php'>here</a> to login.<br>";
exit;
}

include "db_connect.php";

//upload avt
if (isset($_POST['upload'])){
 $file = $_FILES['avt'];
 move_uploaded_file($file['tmp_name'],"upload/".$file['name']);
$link_avt = $file['name'];
															
															
$event_name = $_GET["event_name"];
$des = $_GET["des"];
$venue = $_GET["venue"];
$org = $_GET["org"];
$contact_email = $_GET["contact_email"];
$type = $_GET["type"];
$time = $_GET["time"];
$userid = $_SESSION['userid'];

$event_name = addslashes($event_name);
$des = addslashes($des);
$venue = addslashes($venue);
$org = addslashes($org);
$contact_email = addslashes($contact_email);
//$type = addcslashes($type);

$sql = "INSERT INTO events (NAME, DESCRIPTION, TIME, VENUE, ORGANISER, CONTACT_EMAIL, user_id,TYPES, avt)
VALUES ('$event_name','$des','$time', '$venue','$org' ,'$contact_email','$userid','$type', '$link_avt');";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));
echo "<h2>$event_name created. </h2>";
}

include "search_all.php";
?>
											<a href="index.php"> Return to main page</a>
										</div>
									</div>
								</body>
							</html>