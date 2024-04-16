<?php
//request the data base connection
require_once("../../../../php/dbconnection.php");
session_start();

//getting the request data using POST method
if(isset($_POST['flight_id'])) {
    $flight_id = $_POST['flight_id'];

     //delete sql syntax
    $sql = "DELETE FROM `flight` WHERE `flight_id` = $flight_id";

    //sql Query
    $result = mysqli_query($conn, $sql);

    //if request processed success fully return this
    if($result) {
        echo "Flight record with ID $flight_id deleted successfully.";
    } else {
        echo "Request failed.";
    }
} else {
    //if request failed
    echo "Flight ID not provided in the request.";
}
?>
