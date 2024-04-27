<?php
session_start();
require_once ("../../../php/dbconnection.php");


if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $current_admin_id = $_SESSION['admin_id'];
    $currentDate = date('Y-m-d');

$sql = "SELECT * FROM `admin` WHERE email = '$email'";
$result = mysqli_query($conn,$sql);
$result_row = mysqli_num_rows($result);
if($result_row > 0 )
{
    $_SESSION['admin_error'] = "Admin Account Already Exists";
    header("Location:settings.php");
}
else
{

    $sql_insert ="INSERT INTO `admin`(`added_admin_id`, `name`, `age`, `email`, `password`, `added_date`) 
                   VALUES ('$current_admin_id','$name','$age','$email','$password','$currentDate')";

    $result_insert = mysqli_query($conn,$sql_insert);

    if($result_insert){
        header("Location:settings.php");
    }
    else{
        $_SESSION['admin_error']="Query Failed";
        header("Location:settings.php");
    }
}

}


?>
