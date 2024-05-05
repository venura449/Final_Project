<?php
require_once ("../../../../php/dbconnection.php");

if(isset($_POST['message']) && isset($_POST['f_id'])) {
    $message = $_POST['message'];
    $f_id = $_POST['f_id'];

    $sql = "UPDATE `feedback` SET `reply`='$message' WHERE `feedback_id`='$f_id'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Feedback Updated Successfully";
        header("Location:../feedback.php");
        exit; // Exit to prevent further execution
    } else {
        echo "Request failed.";
    }
}
?>
