<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
			integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
			crossorigin="anonymous"
		/>

		<title>Roni's Corner | About/Contact</title>
		<link rel="stylesheet" href="./css/style.css" />
	</head>

	<body>
	<header>
			<?php
		     session_start();
			if($_SESSION['autorizimiii'] == 1){
		
		?>
			<label for="check">
				<a href="dashboard.php"><i class="fas fa-bars" id="sidebar_btn"></i></a>
			</label>
			  <?php } ?>
			<div class="container">
				<div id="branding">
					<a href="index.php"><img id="icon" src="./images/knife.svg" alt="" /></a>
					<h1>
						<span class="highlight">Roni's Corner</span>
					</h1>
				</div>
				<nav>
					<ul>
						<li id="Home"><a href="index.php">Home</a></li>
						<li class="current"><a href="menu.php">Menu</a></li>
						<li><a href="order.php">Order</a></li>
						<li><a href="Contact.php">About/Contact</a></li>
						<li><a href="login_register.php">Login/Register</a></li>
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
								<b> "Roni's Corner"</b> sets itself apart from the competition by redefining the taste of roasted chicken with a special 
								sauce that offers a unique taste of chicken recipes and that evokes gourmand in everyone. 
								The atmosphere created in restaurants like Prizren, in Prishtina 
								- Emshir and Marigona Neighborhood as well as in the two new points Abi Çarshia and in Ferizaj in the complex 
								"The Village Shopping & Fun", make us present with a unique taste in many places.
							</p>
						</div>
					</div>
					<div class="about-sections">
						<div class="description">
							<h3>Our Mission</h3>
							<p>
								We as a brand have always tried to do our best in everything. 
								In this way even today we continue to work towards the quality of food, which for us is a priority,
								towards a good service, in human resources and also in the growth of the corporation.
								We often review our performance and analyze field data to identify challenges and set new objectives for our operation,
								which we aim to meet and overcome.
							</p>
						</div>
						<img class="offer-image" src="./images/about.jpg" alt="" />
					</div>
					<div class="about-sections">
						<img class="offer-image" src="./images/faca.jpg" alt="" />
						<div class="description">
							<h3>Experience</h3>
							<p>
								The brand <b> "Roni's Corner" </b>is known not only for special chicken recipes,
								but also for extremely warm environments where food is followed by an unforgettable atmosphere. 
								As a priority in <b> Roni's Corner </b>there is also the level of service, where as a result of the work in this aspect every visitor is satisfied. 
								Part of the service is also the hospitality which is always conveyed with positivity, 
								thanks to which the brand has gained credibility from visitors and has now managed to expand to five different points. 
								With its special service and interior,<b> Roni's Corner</b> remains an experience to remember.
							</p>
						</div>
					</div>
				</section>
			</div>
		</section>

		<section id="main1">
			<div class="pjesaPare">
				<h1>Contact</h1>
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
		include 'Footer.php';
	?>
