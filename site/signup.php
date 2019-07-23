<?php

try {
    /**
     * @var mysqli $connection
     */
    $connection = require_once("database.php");

    $adsoyad = $_POST["name"];
    $kullaniciadi = $_POST["username"];
    $email = $_POST["email"];
    $sifre = $_POST["password"];

    $query = "INSERT INTO signup (name, username, email, password) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$adsoyad, $kullaniciadi, $email,$sifre]);

} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

?>
