<?php
// including database Connection
require_once("../../../../../php/dbconnection.php");
session_start();

if(isset($_POST['submit'])){

    $admin_id = 1;

    // Retrieve form data
    $destination = $_POST['destination'];
    $source = $_POST['source'];
    $duration = $_POST['duration'];
    $airline = $_POST['airline'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $price = $_POST['price'];
    $ecosheet = $_POST['ecosheet'];
    $bussheet = $_POST['bussheet'];


    $sql = "INSERT INTO flights (arrival, arrival_time, departure, departure_time, duration, airline, business_seats, economy_seats, price, admin_id)
VALUES ('$destination','$arrival','$source','$departure','$duration','$airline','$bussheet','$ecosheet','$price','$admin_id')";

    $result = mysqli_query($conn, $sql);

    // Check if insertion was successful
    if($result){
        // Redirect to addflights.php
        header("Location: ../AddFlights/addflights.php");
        exit();
    } else {
        // Display error message
        echo "Data adding failed.";
    }

} else {
    echo "Form not submitted.";
}
?>
