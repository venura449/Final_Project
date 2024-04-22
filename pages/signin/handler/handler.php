<?php
// Requesting Database connection
require_once('../../../php/dbconnection.php');
session_start();

// Check if connection to the database is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Check if the form has been submitted using the POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['email'];
        $password = $_POST['password'];

        // Construct SQL query (without SQL injection prevention)
        $sql = "SELECT * FROM `registered_user` WHERE (username='$username' OR email='$username')";
        $result = $conn->query($sql);

        // Check if user exists
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Verify password
            if ($password == $row['password']) {
                // Password is correct, set session and redirect
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_id'] = $row['User_ID'];
                header("Location: ../../Home/index.php");
                exit();
            } else {
                // Password is incorrect
                $_SESSION['login_error'] = "Login failed. Incorrect username or password.";
                header("Location: ../signin.php");
                exit();
            }
        } else {
            // User does not exist
            $_SESSION['login_error'] = "Login failed. Incorrect username or password.";
            header("Location: ../signin.php");
            exit();
        }
    }
}
?>
