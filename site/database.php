<?php

try{
    $conn = new PDO("mysql:host=localhost;dbname=rentacar", "root","");
}
// Check connection

catch (PDOException $e){

    print $e->getMessage();
}

return $conn;