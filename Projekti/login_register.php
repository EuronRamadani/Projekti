<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Roni's Corner | Login/Register</title>
		<link rel="stylesheet" href="./css/style.css" />
	</head>

	<body class="main1">
		<header>
			<div class="container">
				<div id="branding">
					<img id="icon" src="./images/knife.svg" alt="" />
					<h1>
						<span class="highlight">Roni's Corner</span>
					</h1>
				</div>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="order.php">Order</a></li>
						<li><a href="Contact.php">About/Contact</a></li>
						<li class="current">
							<a href="login_register.php">Login/Register</a>
						</li>
						<li><a href="dashboard.php">Dashboard</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<main class="main">
		
			<form class="login" id="signUp" method="POST" action="autozim.php">
				<h1>Login</h1>

				<h3>
					<?php 
					if(isset($_GET['test'])){
							echo "Te dhenat e juaja nuk jan te sakta!";
					}

			?>
		</h3>
				<input
					id="emailii"
					type="text"
					name="username"
					placeholder="Username"
					id="username"
					class="login-in"
					
				/>
				
				<div id="email_error">Please fill up your Email</div>
				<input
					id="passwordii"
					type="password"
					name="password"
					placeholder="Password"
					id="password"
					class="login-in"
				/>
				<div id="pass_error">Please fill up your Password</div>
				<input id="buttonii" type="submit" name="login" value="Login" />
				<p><a href="register.php">Register</a></p>
			</form>
		</main>

		<footer>
			<p>Roni's Corner, Copyright &copy; 2017</p>
		</footer>
		<script src="validimi1.js"></script>
	</body>
</html>
