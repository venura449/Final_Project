<?php

// Requesting database connection
require_once('../../php/dbconnection.php');
session_start();

/* onload Variables */
$_SESSION['user'] = "false";




// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if(isset($_POST['email'])){
        $mail = $_POST['email'];
        $sql = "SELECT * FROM `registered_user` WHERE (email='$mail')";
        $result = $conn->query($sql);

        if($result->num_rows > 0 ){
            $_SESSION['user'] = "true";
            $_SESSION['verified']=$mail;
            header("Location:Add_email_section/add_email.php");
        }
        else{
            echo "user not found";
            header("Location:Add_email_section/add_email.php");
            $_SESSION['user'] = "false";
        }

    }
    else{
        echo "failed to send";
        header("Location:Add_email_section/add_email.php");
        $_SESSION['user'] = "false";
    }
}

?>
