<?php

error_reporting(0);
session_start();
$connection = require_once("database.php");

if($_POST){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $giris = $connection->query("SELECT * FROM signup WHERE username = '$username' and password = '$password'")->fetch(PDO::FETCH_ASSOC);
    $getir = $connection ->query($giris);
    if($getir->num_rows>0){
        while($row = $getir->fetch_assoc()){
        $_SESSION["username"] = $row["username"];
        header("Location: admin.php");
        }

        }

}

?>