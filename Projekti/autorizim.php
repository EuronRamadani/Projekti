<?php include('databaseConfig.php'); ?>
  <?php 

    //Count for users 
  $count = 0;

    session_start();
  if(isset($_POST['login'])){
    //  get variable form login.php 

     $username = $_POST['username'];
     $password = $_POST['password'];



     $_SESSION['name']    = "";
     $_SESSION['lastName']    = "";

    // query for check users
        $query = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
                
        $select_user_query = mysqli_query($connection,$query);
        if(!$select_user_query){
            die("QUERY FAILED".mysqli_error($connection));
        }

        while($row = mysqli_fetch_array($select_user_query)){  
            $idUsers  = $row['idUsers']; 
            $name     = $row['name'];
            $lastName = $row['lastName'];
            $blloku   = $row['blloku'];

           }
          // if iduser is empty this user don't exist in database
      if(!empty($idUsers)){
        // compare password in database and password from users
                $_SESSION['idUnike']     = $idUsers;
                $_SESSION['name']    = $name;
                $_SESSION['lastName']    = $lastName;
                $_SESSION['Autorizimi']    = "GoInside";
 
                if($blloku == 1){
                  $_SESSION['autorizimiii'] = 1;
                   header("Location:dashboard.php");
                }else{
                  $_SESSION['autorizimiii'] = 2;
 header("Location:index.php");
                }
          }else{
        header("Location:login_register.php?test=2");
        // echo $idUser;
          }
          
      }

?>