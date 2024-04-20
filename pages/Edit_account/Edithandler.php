<?php
// Requesting database connection
require_once('../../php/dbconnection.php');
session_start();

$username = $_SESSION['username'];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $dob = $_POST['birth'];
    $gender = $_POST['gender'];
    $city = $_POST['City'];
    $passnum = $_POST['passnum'];
    $bio = $_POST['bio'];
    $mobile = $_POST['mobile'];
    $needs = $_POST['needs'];

    // SQL query to update user information in the database
    $sql = "UPDATE `registered_user` SET 
            `name`='$name', 
            `dob`='$dob', 
            `gender`='$gender', 
            `city`='$city', 
            `passport`='$passnum', 
            `bio`='$bio', 
            `mobile_number`='$mobile', 
            `special_need`='$needs'            
            WHERE `username`='$username'";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        header("Location:../my_bookings/mybookings.php");
    } else {
        header("Location:Edit_account.php");
    }
}
?>
