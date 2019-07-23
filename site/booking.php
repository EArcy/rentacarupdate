<?php

try {
    /**
     * @var mysqli $connection
     */
    $connection = require_once("database.php");

    $name = $_POST["name"];
    $from = $_POST["destinationfrom"];
    $email = $_POST["email"];
    $to = $_POST["destinationto"];
    $date = $_POST["date"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];
    $message = $_POST["message"];

    $query = "INSERT INTO booking (name, email, destinationfrom, destinationto, date, adults, children, message) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $email, $from,$to, $date, $adults, $children, $message]);

} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
?>