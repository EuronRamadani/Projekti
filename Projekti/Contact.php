<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Roni's Corner | About/Contact</title>
		<link rel="stylesheet" href="./css/style.css" />
	</head>

	<body>
		<header>
			<div class="container">
				<div id="branding">
					<img id="icon" src="./images/knife.svg" alt="" />
					<h1><span class="highlight">Roni's Corner</span></h1>
				</div>
				<nav>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="menu.html">Menu</a></li>
						<li><a href="order.html">Order</a></li>
						<li class="current"><a href="Contact.html">About/Contact</a></li>
						<li><a href="login_register.html">Login/Register</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id="main">
			<div class="container">
				<section class="about-container container">
					<div class="about-sections">
						<img class="offer-image" src="./images/faca2.jpg" alt="" />
						<div class="description">
							<h3>About Us</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
								iust o accusantium illo, numquam eligendi facere molestiae aut a
								corrupti reprehenderit.
							</p>
						</div>
					</div>
					<div class="about-sections">
						<div class="description">
							<h3>Our Mission</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
								iust o accusantium illo, numquam eligendi facere molestiae aut a
								corrupti reprehenderit.
							</p>
						</div>
						<img class="offer-image" src="./images/about.jpg" alt="" />
					</div>
					<div class="about-sections">
						<img class="offer-image" src="./images/faca.jpg" alt="" />
						<div class="description">
							<h3>Experience</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
								iust o accusantium illo, numquam eligendi facere molestiae aut a
								corrupti reprehenderit.
							</p>
						</div>
					</div>
				</section>
			</div>
		</section>

		<section id="main1">
			<div class="pjesaPare">
				<h1>Kontakti</h1>
				<p>
					<a href="index.html">Home</a> / <a href="Contact.html">Contact</a>
				</p>
			</div>
		</section>

		<section class="pjeset">
			<div class="pjesaDyte">
				<form>
					<input type="text" id="fname" name="firstname" placeholder="Name" />

					<input type="email" id="lname" name="email" placeholder="Email." />
					<input type="text" id="lname" name="text" placeholder="About." />

					<textarea
						id="subject"
						name="subject"
						placeholder="Write something.."
						style="height: 200px"
					></textarea>

					<input type="submit" value="Submit" />
				</form>
			</div>
			<div class="pjesaTrete">
				<h1>Prishtine:</h1>
				<p>
					Str. Skenderbeu Prishtine <br />
					Phone number: <a href="tel:+38344123456">+38344123456</a>
				</p>
				<h1>Prizren:</h1>
				<p>
					Str. Nena Tereze no: 25 Prizren <br />
					Phone number: <a href="tel:+38344123456">+38344123456</a>
				</p>
				<h1>Ferizaj:</h1>
				<p>
					Rr. Ahmet Kaciku no: 1 Ferizaj <br />
					Phone number: <a href="tel:+38344123456">+38344123456</a>
				</p>
			</div>
		</section>

	<?php 
		include '/SubComponents/Footer.php';
	?>
