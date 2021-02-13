<?php include('databaseConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <title>Roni's Corner | Login/Register</title>
    <link rel="stylesheet" href="./css/style.css" />
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
          
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li class="current"><a href="login_register.php">Login/Register</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <?php 
          if(isset($_POST['RegisterSubmit'])){             
            $Name      = $_POST['name'];
            $lastName  = $_POST['lastName'];
            $email     = $_POST['email'];
            $password  = $_POST['password'];

            $query = "INSERT INTO users (name,lastName,email,password) VALUES ('$Name','$lastName','$email','$password')";
            $insert_posts_query = mysqli_query($connection,$query); 

          }

    ?>
    <main class="main">
      <form id="signUp" class="login" method="POST" action="" >
        <h1>Sign Up</h1>
        <input type="text" class="input" placeholder="Name" name="name" id="name" />
        <div id="emri_error">Please fill up your Name</div>

        <input
          type="text"
          class="input"
          placeholder="Last name"
          id="lastName" name="lastName" 
        />
        <div id="mbiemri_error">Please fill up your Mbiemri</div>

        <input
          type="email"
          placeholder="Email"
          id="emailii" name="email" 
          class="input-field input"
        />
        <div id="email_error">Please fill up your Email</div>

        <input
          type="password" name="password"

          placeholder="Password"
          id="passwordii"
          class="input-field input"
        />
        <div id="pass_error">Please fill up your Password</div>
        <p id="pass">Must contain at least 8 characters.
          The password is case-sensitive.
          The password must contain a mix of letters, numbers, Upper case, and/or special characters</p>
        <input type="submit" name="RegisterSubmit" value="Register" id="butoniii" />
       
      </form>
      <div class="to-login">
       
    </main>

    <footer>
      <p>Roni's Corner, Copyright &copy; 2017</p>
    </footer>
    <script src="validimi2.js"></script>
  </body>
</html>
