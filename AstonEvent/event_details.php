<!DOCTYPE html>
<html>
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
										<a href="login.php" alt="Log out">
											<img src="image/logout.png" width="25px"> </a>
										</div>
									</div>
								</header>
								<!--endheader-->
								<div class="body">
									<div class="container">
										<div id="menu">
											<ul>
												<li><a  id="current" href="index.php">HOME PAGE</a></li>
												<li><a href="login.php">LOG-IN</a></li>
												<li><a href="register_new_user.php" >SIGN-UP</a></li>
												<li><a href="add_event_form.php">CREATE EVENT</a></li>
											</ul>
										</div>
										<div id="main-contain">
											<h2>EVENT DETAILS</h2>
											<div id="thongtin">
												<div id="avtGiangvien">
			  				<?php 
			  						include "db_connect.php";
									if (isset($_POST['upload'])){
			  						$file = $_FILES['avt'];
			  						// echo $file['name'];
			  						// exit();
			  						move_uploaded_file($file['tmp_name'],"upload/".$file['name']);
			  						$link_avt = $file['name'];
			  						$q = 'UPDATE events SET avt = "'.$link_avt.'" WHERE  ID= "'.$_GET['id'].'"';
			  						mysqli_query($link, $q) or die('Can not update');
			  						echo "<div>Updated</div>";
			  						}
                                    
									$id = $_GET['id'];

				  					$stmt = $mysqli->prepare("SELECT events.id,name, description, user_id, avt, username,TYPES_NAME, contact_email, venue FROM events JOIN user ON user.id = events.user_id JOIN types ON events.types=types.idTypes WHERE events.id= ? ");
                                    $stmt->bind_param("i", $id);

									$stmt->execute();
									$stmt->store_result();

									$stmt->bind_result($events_id,$name,$description, $user_id, $avt, $username, $type, $contact,$venue );


									if ($stmt->num_rows > 0) {
										// output data of each row
										while($stmt->fetch()) {
									//echo "id: " . $events_id. " - Event name: " .$name."--Created by: ".$username. " Description: " . $description. "<br>";
																}
															} else {
														echo "0 results";
}
			  				
			  					if($avt == ""){
			  						echo '<img src= "image/test.jpg" width="200px" height="200px">';
			  					}
			  					else{
			  					echo '<img src= "image/pics/'.$avt.'" width="300px" height="200px">';
			  					}
			  					echo " <br><b> ".$name."</b>";
			  					echo "<br> Event's ID: ".$events_id;
			  				?>
													<!-- <form method="post" name="upload_avt" enctype="multipart/form-data">
														<input type="file" name="avt" id="file" class="input_file">
															<label for="file">Choose</label>
															<input type="submit" name="upload" value="Upload">

			  				</form> -->
														</div>
														<div id="chi_tiet">
			  				 <?php
			  				  echo "<big>Event name: ";
			  				  echo $name. "</big>";
							  echo "<br>Hosted by: " .$username. "<br>";
			  				  echo "<br>Description: " .$description. "<br>";
			  				  echo "Event type: " .$type . "<br>";
			  				  echo "Contact: " .$contact . "<br>";
							  echo "Venue: " .$venue . "<br>";
			  				?>
							<!-- Booking event-->
							<form action="process_booking.php" method="get">
								<!-- email field -->
								<label>Enter your email to book:</label>
								<input id="Email" name="Email" placeholder="Email" title="Please enter a Aston email address." pattern=".+(\.ac\.uk.\edu)" required/>
								<input type="hidden" name="event" value="<?php $id ?> "> 
								<input type="submit" name="Book" value="Book">
									</form>
			  			</div>
														</div>
													</div>
												</div>
											</div>
											<!--endbody-->
										</body>
									</html>
