<?php
// including database Connection
require_once("../../../../php/dbconnection.php");
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

    // SQL Injection vulnerability: Directly inserting form data into the SQL query
    $sql = "INSERT INTO `flight`(`admin_id`, `arrivale`, `departure`, `Destination`, `source`, `airline`, `Seats`, `duration`, `Price`,  `Eco_sheet`, `bus_seats`) 
            VALUES ('$admin_id','$arrival','$departure','$destination','$source','$airline','$ecosheet+$bussheet','$duration','$price','$ecosheet','$bussheet')";
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
