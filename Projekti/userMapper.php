<?php
include_once "databaseConfig.php";

class UserMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn=$this->getConnection();
    }

    public function getUserByID($userId)
    {
        $sql="Select * from user where userid=:id";
        $staement=$this->conn->prepare($sql);
        $statement->bindPara(":id", $userId);
        $statement->execute();

        $result=$statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUserByUsername($username)
    {
        $sql="Select * from user where username=:username";

        $staement=$this->conn->prepare($sql);
        $statement->bindPara(":username", $username);
        $statement->execute();

        $result=$statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
         $sql="Select * from user";
        
        $staement=$this->conn->prepare($sql);
        $statement->execute();

        $result=$statement->fetchAll();
        return $result;
    }

    public function insertUser(\SimpleUser $user)
    {
        $sql="insert into user(username, userlastname, role, password ) values (:name, :lastname, :role, :password)";

        $username=$user->getusername();
        $lastname=$user->getLastname();
        $pass=$user->getPassword();
        $password=password_hash($pass, PASSWORD_BCRYPT);
        $role=$user->getRole();

        $staement=$this->conn->prepare($sql);
        $statement->bindPara(":name", $username);
        $statement->bindPara(":lastname",$lastname);
        $statement->bindPara(":role", $role);
        $statement->bindPara(":password", $password);
        $statement->execute();

        $result=$statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteUser($userId)
    {
        $sql="delete from user where userid=:id";
        $statement = $this->conn->prepare($sql);
        $statement -> bindParam(":id", $userId);
        $statement->execute();
    }
}
