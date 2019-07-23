<?php

try {
    /**
     * @var mysqli $connection
     */
    $connection = require_once("database.php");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $query = "INSERT INTO contact (name, email, phone, message) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $email, $phone,$message]);


} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

?>