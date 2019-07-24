<?php

error_reporting(0);
session_start();
$connection = require_once("database.php");
/**
 * @var PDO $connection
 */
if($_POST){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = $connection->prepare("SELECT * FROM signup WHERE username = :username and password = :pass");
    $query->bindParam("username", $username);
    $query->bindParam("pass", $password);
    $query->execute();
    $user = $query->fetch();

    if(!empty($user)){

            $_SESSION["user"] = $user;
            header("Location: admin.php");
    }
    else{

        echo ("Wrong username or password");
        echo "<br><a href='loginpage.php'><input type='button' value='Tekrar dene' name='logout' </a>";

    }

}

?>