<?php

include 'variables.php'

    $usernamePattern='^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$'
    $passwordPattern='^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$'


    foreach($loginList as $login){
        if(preg_match($usernamePattern, $login['username']) && 
        preg_match($passwordPattern, $login['password']))

        //do something
    }
    else{
        echo $login['username']. 'doesnt match';
    }

    if(preg_match($usernamePattern, $login4['username']))
        header('Location: dashboard.php');
?>
