<!DOCTYPE html>
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
											<h1>REGISTER</h1>
											<span style="font-size: 20px; color: white; font-style: italic">
												<form id="sign-id" action="process_new_user.php" method="post">
													<!-- email field -->
													<label for="username">Username:</label>
													<input id="username" name="username" placeholder="Email" title="Please enter a Aston email address." pattern=".+(\.ac\.uk.\edu)" required/>
													<br>
														<!-- password field -->
														<label for="pw">Password:</label>
														<input id="pw" name="pw" type='password' placeholder="Password" title="Please enter a your password." required/>
														<br>
															<!-- confirm password field -->
															<label for="pw1">Confirm Password:</label>
															<input id="pw1" name="pw1" type='password' placeholder="Password" title="Please re-enter a your password." required/>
															<br>
																<input type=submit value="Sign up"/>
															</form>
		
												<?php
											include "db_connect.php";
										$mysqli->close();
										?>
														</main>
													</div>
													</div>
												</body>
											</html>
									