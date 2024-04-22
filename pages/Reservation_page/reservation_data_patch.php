<?php

session_start(); // Start the session

$seat_num = $_POST['seatnum']; // Get the seat number from the form
$lug_num = $_POST['lugnum']; // Get the luggage number from the form
$lug_num_add = $_POST['lugnumadd']; // Get the additional luggage number from the form

// Store the form data in session variables
$_SESSION['seatnum'] = $seat_num;
$_SESSION['lugnum'] = $lug_num;
$_SESSION['lugnumadd'] = $lug_num_add;

// Assuming you want to pass the flight ID as well
$flight_id = $_SESSION['f_id']; // Assuming you stored the flight ID in a session variable

// Redirect the user to the submit_details page with the flight ID
header("Location:../submit_details/submit_details.php?flightid=$flight_id");

?>
