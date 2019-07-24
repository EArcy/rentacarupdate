<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin panel</title>
</head>
    <body>
    <?php
    echo "<p><b>Kullanıcı adı: </b>"; echo $_SESSION["user"]["username"];
    echo "<p><b>Email: </b>";echo $_SESSION["user"]["email"];
    echo "<p><b>Şifre: </b>"; echo $_SESSION["user"]["password"];
    echo "<p><b>İsim: </b>"; echo $_SESSION["user"]["name"];


    echo "<br><br><a href='index.html'><input type='button' value='Log out' name='logout' </a> <p>";

    echo "<a href='infoupdate.php'><input type='button' value='Update Informations ' name='change' </a>";

    ?>


</body>

</html>