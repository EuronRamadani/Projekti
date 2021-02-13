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
			<div class="container">
				<div id="branding">
					<img id="icon" src="./images/knife.svg" alt="" />
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
						<li><a href="dashboard.php">Dashboard</a></li>
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
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae sunt
						sint temporibus vitae deserunt accusamus necessitatibus repellat
						accusantium, reprehenderit beatae, neque pariatur atque!
					</p>
					<a href="#menu" id="button1" class="button">Go to Menu</a>
				</div>
				<div class="container line">
					<input id="search" type="text" placeholder="Search" />
					<button>Search</button>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
						deleniti, molestias, fugiat eaque aperiam sequi minima quam deserunt
						tempore dolorum odit dolores quisquam non nesciunt maiores iure
						velit itaque ad voluptatum mollitia aliquam minus. Explicabo,
						nesciunt perferendis praesentium, minima quisquam doloremque
						reiciendis reprehenderit saepe officia, pariatur dolorem sed fugiat
						non.
					</p>
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
					<img src="./images/salad.jpg" alt="" />
					<h5>Lorum</h5>
					<span class="price">20$</span>
					<a href="#" class="button">Order Now</a>
				</div>
				<div class="menu-item">
					<img src="./images/2.jpg" alt="" height="135px" />
					<h5>Ipsum</h5>
					<span class="price">20$</span>
					<a href="#" class="button">Order Now</a>
				</div>
				<div class="menu-item">
					<img src="./images/3.webp" alt="" />
					<h5>ITEM</h5>
					<span class="price">20$</span>
					<a href="#" class="button">Order Now</a>
				</div>
				<div class="menu-item">
					<img src="./images/4.jpg" alt="" height="135px" />
					<h5>ITEM</h5>
					<span class="price">20$</span>
					<a href="#" class="button">Order Now</a>
				</div>
			</div>
		</section>

		<section class="menu-offer container">
			<img class="offer-image" src="./images/breakfast.png" alt="" />
			<div class="description">
				<h3>Pancakes 3.50$</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae iust o
					accusantium illo, numquam eligendi facere molestiae aut a corrupti
					reprehenderit.
				</p>
				<div class="button_order">
					<a href="#">Order</a>
				</div>
			</div>
		</section>

		<footer>
			<p>Roni's Corner, Copyright &copy; 2017</p>
		</footer>

		<script src="Slider.js"></script>
	</body>
</html>