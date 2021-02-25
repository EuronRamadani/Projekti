
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
		<title>Roni's Corner| Welcome</title>
		<link rel="stylesheet" href="css/style.css"/>
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
						<li id="Home" class="current"><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="order.php">Order</a></li>
						<li><a href="Contact.php">About/Contact</a></li>
						<li><a href="login_register.php">Login/Register</a></li>
					</ul>
				</nav> 
			</div>
		</header>
		<section id="showcase">
			<div class="overlay">
				<div class="container">

					
					<h2 id="h1"><i>Are you hungry?</i></h2>
					<h1>Don't wait!</h1>

					<p>
						I opened because i jave always had a passion
						for the restaurant industry and saw a void 
						in the market that i thought i could fill

					</p>
				
					<a href="#menu" id="button1" class="button">Go to Offers</a>
				</div>
				<div class="container line">
					<input id="search" type="text" placeholder="Search" />
					<button>Search</button>
				
					<p><i><b> you gotta nourish to flourish</b></i></p>
					<p><i><b>goodies for the foodies</b></i></p>
					<p><i><b>food is always a good idea</b></i></p>
				</div>
			</div>
		</section>

		<section>
			<div class="container-slider">
				<i class="fas fa-arrow-left" id="prevBtn"></i>
				<i class="fas fa-arrow-right" id="nextBtn"></i>
				<div class="slide">
					<img src="./images/open.jpg" id="last" alt="" />
					<img src="./images/pexels-negative-space-34650.jpg" alt="" />
					<img src="./images/window.jpg" alt="" />
					<img src="./images/coffee.jpg" alt="" />
					<img src="./images/open.jpg" alt="" />
					<img
						src="./images/pexels-negative-space-34650.jpg"
						id="first"
						alt=""
					/>
				</div>
			</div>
		</section>

		<section class="offer">
			<div class="item">
				<img src="./images/delivery.svg" alt="" />
				<h3>Free Delivery</h3>
			</div>
			<div class="item">
				<img src="./images/support.svg" alt="" />
				<h3>24/7 Support</h3>
			</div>
			<div class="item">
				<img src="./images/farm.svg" alt="" />
				<h3>Farm grown</h3>
			</div>
		</section>

		<section id="menu" class="menu">
			<div class="container menu-container">
				<div class="menu-item">
					<img src="images/salad.jpg" alt="" />
					<h5>Italian Salad</h5>
					<span class="price">5.60$</span>
					<a href="order.php" class="button">Order Now</a>
				</div>
				<div class="menu-item">
					<img src="./images/2.jpg" alt="" height="135px" />
					<h5>Mix Salad</h5>
					<span class="price">7.00$</span>
					<a href="order.php" class="button">Order Now</a>
				</div>
				<div class="menu-item">
					<img src="./images/3.webp" alt="" />
					<h5>Meat with souce</h5>
					<span class="price">13.50$</span>
					<a href="order.php" class="button">Order Now</a>
				</div>
				<div class="menu-item">
					<img src="./images/4.jpg" alt="" height="135px" />
					<h5>Snickers Chocolate</h5>
					<span class="price">4.30$</span>
					<a href="order.php" class="button">Order Now</a>
				</div>
			</div>
		</section>

		<section class="menu-offer container">
			<img class="offer-image" src="./images/breakfast.png" alt="" />
			<div class="description">
				<h3>Pancakes 3.50$</h3>
				<p>
					This is our specialty in our Corner Pancakes that are so delicius and
					are offerd with chocolate, honey or cheese.
					<span> There was no time for chit-chat when there were chocolate chip pancakes to be eaten.</span>
				</p>
				<div class="button_order">
					<a href="order.php">Order</a>
				</div>
			</div>
		</section>

		<footer>
			<p>Roni's Corner, Copyright &copy; 2017</p>
		</footer>

		<script src="Slider.js"></script>
	</body>
</html>
