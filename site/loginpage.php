<?php
    include("login.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stil.css">
    <title>Log in</title>
    <meta charset="utf-8">

<body>
<form class="" action="login.php" method="post">
    <div class = "form">
        <input class = "info" type = "text" name="username" placeholder="Username: " value =""<br>
        <input class = "info" type = "password" name="password" placeholder="Password: " value =""<br>
        <input type="submit" name="send" value="Log In"><br>
    </div>
</form>
</body>

</html>