<?php

 /**
     * @var PDO $connection
     */


session_start();
$connection = require_once('database.php');
$user = $_SESSION['user'];
$changebutton = $_POST['passchange'];


if ($user){
    if(isset($changebutton)){
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];

            if($newpassword==$confirmnewpassword){

                $sql = "UPDATE signup SET password = ? where username = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$newpassword, $user['username']]);


            }
            else
                die("New passwords don't match.");
        }
    echo "
    <form action = 'infoupdate.php' method='POST'>
            Old password: <input type='text' name = 'oldpassword'><p>
            New password: <input type='text' name = 'newpassword'><p>
            Confirm new password: <input type='text' name = 'confirmnewpassword'><p>
    
    <input type='submit' value='Change password' name='passchange'> <br>
    <br><a href='index.html'><input type='button' value='Log out' name='logout' </a> <p>
    </form>
    ";
}
else
    die('Log in first...');
?>

