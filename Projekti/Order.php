<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Roni's Corner | Order</title>
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
						<li class="current"><a href="order.php">Order</a></li>
						<li><a href="Contact.php">About/Contact</a></li>
						<li>
							<a href="login_register.php">Login/Register</a>
						</li>
						<li><a href="dashboard.php">Dashboard</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<main class="main-order">
		<form class="login1" id="signUp1">
				<h1>Order</h1>
				<p>
					Ju lutem zgjedheni Ushqimin
					<select name="Ushqimi"  id="Ushqimi">
						<option value="Zgjedh">Zgjedh</option>
						<option value="Pice">Pice</option>
						<option value="Gjelle">Gjelle</option>
						<option value="Sallate">Sallate</option>
						<option value="Pancake">Pancake</option>
						<option value="">Mishe</option>
					</select>
                    <p>Per sa Persona</p>
					<select name="" id="Ushqimi">
						<option value="persona">Zgjedh</option>
						<option value="persona">1</option>
						<option value="persona">2</option>
						<option value="persona">3</option>
						<option value="persona">4</option>
						<option value="persona">5</option>
						<option value="persona">6</option>
						<option value="persona">7</option>
						<option value="persona">8</option>
						<option value="persona">9</option>
						<option value="persona">10</option>
					</select>
				</p>
				<p>
					Ju lutem zgjedheni Pijen
					<select name="Pije" id="Pija">
						<option value="Zgjedh">Zgjedh</option>
						<option value="Zgjedh">Coca Cola</option>
						<option value="Zgjedh">Fanta</option>
						<option value="Zgjedh">Energy Drink</option>
						<option value="Zgjedh">Multivitamin</option>
						<option value="Zgjedh">Birre</option>
						<option value="Zgjedh">Vere</option>
                    </select>
                     <p>Per sa Persona</p>
					<select name="" id="Pija">
						<option value="persona">Zgjedh</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</p>
				<input
					type="text"
					name=""
					placeholder="Qyteti"
					id="password"
					class="login-in"
                />
                	<input
					type="text"
					name=""
					placeholder="Rruga"
					id="password"
					class="login-in"
				/>
				<input type="submit" name="" value="Porosite" />
			</form>
		</main>

	<?php 
		include 'Footer.php';
	?>

