
<?php
require_once("../../../php/dbconnection.php");
session_start();

$email = $_SESSION['verified'];

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

$sql = "UPDATE `registered_user` SET `password`= '$password' WHERE `email`= '$email' ";

$result = $conn->query($sql);

if ($result) {
    $_SESSION['pass'] = $email;
    header('Location:../../signin/signin.php');
} else {
    $_SESSION['pass'] = "password change failed";
    header('Location:add_email.php');
}
?>
