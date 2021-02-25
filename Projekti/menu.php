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

		<title>Roni's Corner | MENU</title>
		<link rel="stylesheet" href="./css/style.css" />
	</head>

	<body class="main1">
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
		<div class="wrapper">
			<div class="title">
				<h4>our menu</h4>
			</div>
			<div class="Menu">
				<div class="single-menu">
					<img src="./images/foto2.jpg" alt="" />
					<div class="menu-content">
						<h4>Fried Chicken <span>$8.90</span></h4>
						<p>
							Vegetarains, Broasted, Wings, Popcorn and Smoked 
						</p>
						<a href="order.php" class="button-menu">Order Now</a>
					</div>
				</div>
				<div class="single-menu">
					<img src="./images/1.png" alt="" />
					<div class="menu-content">
						<h4>Rolled White Meal <span>$11.50</span></h4>
						<p>
							Rolled White Meal contains white meal with souce inside and served with salad
						</p>
						<a href="order.php" class="button-menu">Order Now</a>
					</div>
				</div>
				<div class="single-menu">
					<img src="./images/sushi.jpg" alt="" />
					<div class="menu-content">
						<h4>Sushi <span>$15.20</span></h4>
						<p>
							Nigiri, Sashimi, Maki and Uramaki
						</p>
						<a href="order.php" class="button-menu">Order Now</a>
					</div>
				</div>
				<div class="single-menu">
					<img src="./images/pizza.jpg" alt="" />
					<div class="menu-content">
						<h4>Pizza <span>$4.30</span></h4>
						<p>
							Cheese, Pepperoni, Margherita and Meat
						</p>
						<a href="order.php" class="button-menu">Order Now</a>
					</div>
				</div>
				<div class="single-menu">
					<img src="./images/soup.jpg" alt="" />
					<div class="menu-content">
						<h4>Soup<span>$3.10</span></h4>
						<p>
							Beef, Bean, tortilla, Noodle and Chicken
						</p>
						<a href="order.php" class="button-menu">Order Now</a>
					</div>
				</div>
				<div class="single-menu">
					<img src="./images/meat.jpg" alt="" />
					<div class="menu-content">
						<h4> Barbecue Meat<span>$30</span></h4>
						<p>
							Steak, Beef, Lamb, and Pork
						</p>
						<a href="order.php" class="button-menu">Order Now</a>
					</div>
				</div>
			</div>
		</div>

		<?php 
		include 'Footer.php';
	?>

