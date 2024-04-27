<?php
session_start();
require_once ("../../../php/dbconnection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $sql = "SELECT * FROM `admin` WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);
        $number = mysqli_num_rows($result);

        if($password == $confirmpassword){
            if($number == 1){
                $secondsql = "UPDATE `admin` SET `password`='$password' WHERE  email = '$email'";
                $secondres = mysqli_query($conn,$secondsql);

                if($secondres){
                    $_SESSION['passchanged'] = true;
                    header("Location:password.php");
                }
            }
        }

    } else {
        echo "Error: Required fields are missing.";
    }

} else {
    echo "Error: This script expects a POST request.";
}
?>
