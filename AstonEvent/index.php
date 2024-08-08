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
										</br>
									</div>
									<div id="cthome">
										<div id="main-contain">
											<div id="thongtin">
													<?php
													include "search_all.php";
													?>
												<h3> Aston Event Website System - v.1.0 </h3>
											</br>
										</div>
									</div>
								</div>
						<!--endbody-->
						<!--  <footer>
      <div class="container">
           Beta version
      </div>
    </footer> -->
					</body>
				</html>