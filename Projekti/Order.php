<?php include('databaseConfig.php'); ?>
<?php 
	session_start();
	if(!isset($_SESSION['idUnike'])){
		 ?>
		 		<script type="text/javascript">
		 				alert("Ju duhet te jeni i logu-ar per te bere order");
		 		</script>
		 <?php
		 header("Location:index.php");
	}

    	$mesazhi = "";

		if(isset($_POST['NewOrder'])){

			$Ushqimi  = $_POST['Ushqimi'];
			$persona_ush  = $_POST['persona_ush'];
			$Pije  = $_POST['Pije'];
			$persona_pije  = $_POST['persona_pije'];
			$City  = $_POST['City'];
			$Street  = $_POST['Street'];

			$aktivPorosit = $_SESSION['name']." ".$_SESSION['lastName'];

			$query = "INSERT INTO myorders (ushqimi,persona_ushqim,Pije,persona_pije,City,Street,fullName) VALUES ('$Ushqimi','$persona_ush','$Pije','$persona_pije','$City','$Street','$aktivPorosit')";
            $insert_posts_query = mysqli_query($connection,$query); 


            $mesazhi = "Porosia juaj u dergua me sukses !";
		}
	?>





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

		<title>Roni's Corner | Order</title>
		<link rel="stylesheet" href="./css/style.css" />
	</head>

	<header>
			<?php
			if($_SESSION['autorizimiii'] == 1){
		
		?>
	
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
		<main class="main-order">
		<form class="login1" id="signUp1" method="POST" action="" >
				<h1>Order</h1>
				<h3><?php echo $mesazhi;?></h3>
				<p>
					Please choose your food
					<select name="Ushqimi"  id="Ushqimi" class="Ushqimi">
						<option value="Zgjedh">Choose</option>
						<option value="Pizza">Pizza</option>
						<option value="Soup">Soup</option>
						<option value="Meat">Meat</option>
						<option value="Sushi">Sushi</option>
						<option value="Fried Chicken">Fried Chicken</option>
						<option value="Barbecue">Barbecue</option>
					</select>
                    <p>How many people</p>
					<select name="persona_ush" id="Ushqimi ushqimi2">
						<option value="persona">Choose</option>
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
					Please choose your drink
					<select name="Pije" id="Pija" class="Pija">
						<option value="Zgjedh">Choose</option>
						<option value="Zgjedh">Coca Cola</option>
						<option value="Zgjedh">Fanta</option>
						<option value="Zgjedh">Energy Drink</option>
						<option value="Zgjedh">Multivitamin</option>
						<option value="Zgjedh">Beer</option>
						<option value="Zgjedh">Wine</option>
                    </select>
                     <p>How many people</p>
					<select name="persona_pije" id="Pija pija2">
						<option value="persona">Choose</option>
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
					name="City"
					placeholder="City"
					id="password"
					class="login-in"
                />
                	<input
					type="text"
					name="Street"
					placeholder="Street"
					id="password"
					class="login-in"
				/>
				<input type="submit" name="NewOrder" value="Order" />
			</form>
		</main>

	<?php 
		include 'Footer.php';
	?>


