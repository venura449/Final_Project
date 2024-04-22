<?php
// Requesting database connection
require_once('../../php/dbconnection.php');
session_start();

$username = $_SESSION['username'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Get data from post request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Retrieve user ID based on username
        $user_id_query = "SELECT User_ID FROM `registered_user` WHERE `username` = '$username'";
        $user_id_result = mysqli_query($conn, $user_id_query);

        if ($user_id_result) {
            $user_id_row = mysqli_fetch_assoc($user_id_result);
            $user_id = $user_id_row['User_ID'];

            // Insert data into the inquire table
            $insert_query = "INSERT INTO `feedback` (`user_id`, `question`) VALUES ('$user_id','$message')";
            $insert_result = mysqli_query($conn, $insert_query);

            if ($insert_result) {
                // Successful message
                echo "Inquiry submitted successfully!";
                header("Location:../need_any_help/need_any_help.php");
                exit;
            } else {
                // Error message if failed to write data to the database
                $_SESSION['inq_error'] = "Inquiry Failed. Unknown Error Occurred";
                header("Location:../need_any_help/need_any_help.php");
                exit();
            }
        } else {
            // Error message if failed to retrieve user ID
            $_SESSION['inq_error'] = "Inquiry Failed. User not found";
            header("Location:../need_any_help/need_any_help.php");
            exit();
        }
    }
}
?>
