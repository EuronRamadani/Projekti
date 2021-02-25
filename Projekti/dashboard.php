<?php include('databaseConfig.php'); ?>

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
		<title>Roni's Corner| Dashboard</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
		
		<header>
			<label for="check">
				<a href="dashboard.php"><i class="fas fa-bars" id="sidebar_btn"></i></a>
			</label>
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

		<div class="sidebar">
			<a href="#"><i class="fas fa-desktop"></i> <span>Dashboard</span> </a>
			<a href="#"><i class="fas fa-cogs"></i> <span>Components</span> </a>
			<a href="#"><i class="fas fa-table"></i> <span>Tables</span> </a>
			<a href="#"><i class="fas fa-th"></i> <span>Forms</span> </a>
			<a href="#"><i class="fas fa-info-circle"></i> <span>About</span> </a>
			<a href="#"><i class="fas fa-sliders-h"></i> <span>Settings</span> </a>
		</div>

		<main class='dashboard-main'>
			<?php 
			$mesazhi = "";
			if(isset($_GET['idAcceptOrder'])){

 					$id = $_GET['idAcceptOrder'];
			$query = "DELETE FROM myorders WHERE idOrders = '$id'";
            $insert_posts_query = mysqli_query($connection,$query); 
            	 echo  $mesazhi = "Porosia u pranua dhe u fshi nga baza e te dhenave sepse ishte ne pritje.";

			}


		?>

			<table id='tabela_dashboard'>
				<thead>
					<tr>
						<th>Nr</td>
						<th>Ushqimi</th>
						<th>Persona_ushqimi</th>
						<th>Pije</th>
						<th>Persona_Pije</th>
						<th>City</th>
						<th>Street</th>
						<th>Emri</th>
						<th>Opsion</th>

					</tr>
				</thead>
				<tbody>
							 <?php 

		   $query = "SELECT * FROM myorders";
            $select = mysqli_query($connection,$query); 


                                    $count = 0;

                                      while($row = mysqli_fetch_assoc($select)){    
                                          $count++;	
											$idOrders            = $row['idOrders'];
											$ushqimi            = $row['ushqimi'];
											$persona_ushqim            = $row['persona_ushqim'];
											$Pije            = $row['Pije'];
											$persona_pije            = $row['persona_pije'];
											$City            = $row['City'];
											$Street            = $row['Street'];
											$fullName            = $row['fullName'];



                                             ?>




					<tr>
						<th><?php echo $count;?></td>
						<th><?php echo $ushqimi;?></th>
						<th><?php echo $persona_ushqim; ?></th>
						<th><?php echo $Pije; ?></th>
						<th><?php echo $persona_pije; ?></th>
						<th><?php echo $City; ?></th>
						<th><?php echo $Street; ?></th>
						<th><?php echo $fullName; ?></th>
						<th>  <a href='dashboard.php?idAcceptOrder=<?php echo $idOrders; ?>' class="btn btn-primary">
                                             PRANO POROSIN
                                          </a></th>

					</tr>
				<?php }?>
				</tbody>
			</table>

		</main>
        




    </body>        
</html>




<?php
include 'footer.php'
?>