
<!DOCTYPE html>
<html>
	<head>
		<title> LOCKED HOUSE MONITORING SYSTEM</title>
		<link rel="stylesheet" type="text/css" href="layout.css"/>
	</head>
	<body>
		<div class="wrapper">
			<div class="left">
				Email-id:abcdef@gmail.com
			</div>	
			<div class="right">
				Phone-no:0123456789
			</div>
			<div class="header1">
				<img src="E:/images.jpg"/>
			</div>
			<div class="header2">
				<form action="website.html" method="get">
					<h1>Locked House Monitoring System</h1>
				</form>	
			</div>
			<div class="header3">
				<img src="E:/download.png"/>
			</div>
			<div class="navigation">
				<ul>
					<li><a href="web.html"> HOME </a></li>
					<li><a href="service.html"> SERVICES </a></li>
					<li><a href="about.html"> ABOUT </a></li>
					<li><a href="contact.html"> CONTACT US </a></li>
				</ul>		
			</div>
			<div class="login1">
				<form action="F:/lhms/regi.html" method="get">
				<button id="button" type="submit" value="Register"><b>REGISTER</b></button>
				</form>
			</div>
			<div class="register">
				<form action="F:/lhms/server.php" method="post">
				<button id="button" type="submit" value="login"><b>LOGIN</b></button>
				</form>
			</div>
			<div class="window1">
			</div>
			<div class="window2">
				<div class="head1">
					<h2>REGISTER</h2>
				</div>	
				<?php include('server.php') ?>
				<form method="post" action="register.php">
					<?php include('errors.php'); ?>

					<div class="input-group">
						<label>Username</label>
						<input type="text" name="username">
					</div>
					<div class="input-group">
						<label>Email</label>
						<input type="email" name="email">
					</div>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password_1">
					</div>
					<div class="input-group">
						<label>Confirm password</label>
						<input type="password" name="password_2">
					</div>
					<div class="input-group">
							<button type="submit" class="btn" name="reg_user">Register</button>
					</div>
					<p>
						Already a member? <a href="F:/lhms/log.html">Sign in</a>
					</p>
				</form>
			</div>
			<div class="window3">
			</div>	
		</div>
	</body>
</html>	
				
