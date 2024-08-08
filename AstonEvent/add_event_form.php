<?php 
include "db_connect.php";
?>
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
										</div>
										<div id="main-contain">
											<h1>     YOU MUST LOG-IN BEFORE CREATING A NEW EVENT</h1>
											<h2>      CREATE NEW EVENT</h2>
											<span style="font-size: 20px; color: white; font-style: italic">
												<form action="add_event.php">
													<br>
		Name:
		<input type="text" name="event_name" required> Description:
														<input type="text" name="des" required> Venue:
														<input type="text" name="venue" required> Organiser:
														<input type="text" name="org" required> Contact email:
														<input type="email" name="contact_email" placeholder="Email" required pattern=".+(\.ac\.uk|\.edu)">
															<label for="cars">Choose event type:</label>
															<select name="type">
																<option value="1">Sport</option>
																<option value="2">Culture</option>
																<option value="3">Other</option>
															</select>
															<label for="time">Date and time:</label>
															<input type="datetime-local" name="time">
									<form method="post" name="upload_avt" enctype="multipart/form-data">
														<input type="file" name="avt" id="file" class="input_file">
															<label for="file">Choose a picture</label>
														<input type="submit" name="upload" value="Upload"> 
			  				</form> 
																<input type="submit" value="Create">
			</form>
															</span>
														</div>
													</body>
												</html>