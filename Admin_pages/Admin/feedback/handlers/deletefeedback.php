<?php
require_once("../../../../php/dbconnection.php");
session_start();

$f_id = $_GET['f_id'];


//delete sql syntax
$sql = "DELETE FROM `feedback` WHERE `feedback_id` = $f_id";

//sql Query
$result = mysqli_query($conn, $sql);

//if request processed successfully return this
if($result) {
    echo "Feedback Deleted Successfully";
    header("Location:../feedback.php");
} else {
    echo "Request failed.";
}



?>

