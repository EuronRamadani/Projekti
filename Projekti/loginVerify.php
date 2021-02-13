<?php 

require 'variables.php';
include_once 'personClass.php';

session_start();


if(isset($_POST['login-btn'])){
    $login= new LoginLogic($_POST);
    $login->verify();
}else{
    header('Location: login_register.php');
}

class LoginLogic{

    private $username= "";
    private $password= "";
    function __construct($formData){
        $this->username=$formData['username'];
        $this->password=$formData['password'];
    }

    public function verify(){

        if( $this->verifyEmptyData($this->username, $this->password)){
            header("Location: login_register.php");
        }
        else if( $this->verifyLogin($this->username, $this->password) !=null){
            header("Location: index.php");
        }else{
            header("Location: login_register.php");
        }
    }

    private function verifyEmptyData($username, $pass){
        if(empty($username) || empty($pass)){
            return true;
        }
        return false;
    }

    private function verifyLogin($username, $pass){

        $loggedInUser=null;
        
        $users = VariablesExample::getUsers();
        foreach($users as $user){
            if($user['username'==$username && $user['password']==$pass]){
               if($user['role']==1){
                    $loggedInUser=new AdminUser($user['id'], $user['username'], $user['password'], $user['role']);
                    break;
               }
               else {

                $loggedInUser=new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], "");
               }
                return true;
            }
        }

        if($loggedInUser!=null){
            $loggedInUser->setSession();
            $loggedInUser->setCookie();
        }

        return $loggedInUser;
    }
}

    class RegisterLogic{
        public function __construct(){

        }
        public function registerUser(){
            
        }
    }


?>
    

    
