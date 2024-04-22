
<?php
//requesting data base conncetion
require_once('../../../php/dbconnection.php');
session_start();

?>

<?php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Get data from post request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $cusername = $_POST['username'];
        $password = $_POST['password'];


        // Check if user already exists
        $check_username = "SELECT *  FROM `registered_user` WHERE `username` = '$cusername'  
                                    OR `email`='$email'";
        $check = $conn->query($check_username);

        // If user already exists, show error message
        if ($check->num_rows > 0) {
            $_SESSION['signup_error'] = "Signup failed. Username/Email Already exists.";
            header("Location:../signup.php");
            exit();
        }

        //writing to Database
        else {
            $sql = "INSERT INTO `registered_user`( `username`, `email`, `password`) VALUES ('$cusername','$email','$password')";
            $result = $conn->query($sql);

            //successfull messsage
            if ($result == TRUE) {
                echo "Register successful!";
                header("Location:../../signin/signin.php");
                exit;
            } else {

                // gives error message when failed to write data to database
                $_SESSION['signup_error'] = "Signup failed.Unknown Error Occured";
                header("Location: ../signup.php");
                exit();
            }
        }
    }
}
?>
