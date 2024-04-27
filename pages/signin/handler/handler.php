<?php
// Requesting Database connection
require_once('../../../php/dbconnection.php');
session_start();

if(isset($_SESSION['destination'])){
    $url = $_SESSION['destination'];
}
else{
    $url = "../../Home/index.php";
}

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
                $_SESSION['logged_in'] = true;
                header("Location:$url");
                exit();
            } else {
                // Password is incorrect
                $_SESSION['login_error'] = "Login failed. Incorrect username or password.";
                header("Location: ../signin.php");
                exit();
            }
        } else {

            if (strpos($username, '@wixair.com') !== false) {
                $sql_for_admin = "SELECT * FROM `admin` WHERE (email='$username')";
                $result_of_admin = mysqli_query($conn,$sql_for_admin);
                $result_num_rows = mysqli_num_rows($result_of_admin);
                $result_for_row = mysqli_fetch_assoc($result_of_admin);

                if($result_num_rows == 1){
                    if($result_for_row['password']==$password){
                        $_SESSION['admin_id']=$result_for_row['admin_id'];
                        header("Location: ../../../Admin_pages/Admin/Admin.php");
                        exit();
                    }
                    else{
                        $_SESSION['login_error'] = "Admin Account Email or Password Error";
                        header("Location: ../signin.php");
                        exit();
                    }

                }
                else{
                    $_SESSION['login_error'] = "Error Admin Account  not found";
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
}
?>
