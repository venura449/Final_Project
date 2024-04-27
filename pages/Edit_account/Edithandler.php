<?php
// Requesting database connection
require_once('../../php/dbconnection.php');
session_start();

$username = $_SESSION['username'];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $updateFields = array();
    if (!empty($_POST['name'])) {
        $updateFields[] = "`name`='" . $_POST['name'] . "'";
    }
    if (!empty($_POST['birth'])) {
        $updateFields[] = "`dob`='" . $_POST['birth'] . "'";
    }
    if (!empty($_POST['gender'])) {
        $updateFields[] = "`gender`='" . $_POST['gender'] . "'";
    }
    if (!empty($_POST['City'])) {
        $updateFields[] = "`city`='" . $_POST['City'] . "'";
    }
    if (!empty($_POST['passnum'])) {
        $updateFields[] = "`passport`='" . $_POST['passnum'] . "'";
    }
    if (!empty($_POST['bio'])) {
        $updateFields[] = "`bio`='" . $_POST['bio'] . "'";
    }
    if (!empty($_POST['mobile'])) {
        $updateFields[] = "`mobile_number`='" . $_POST['mobile'] . "'";
    }
    if (!empty($_POST['needs'])) {
        $updateFields[] = "`special_need`='" . $_POST['needs'] . "'";
    }

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $filename = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $newimageex = explode('.', $filename);
        $newimagename = uniqid() . '.' . end($newimageex);

        $sql34 = "SELECT  `user_profile_img` FROM `registered_user` WHERE username = '$username'";
        $result34 = mysqli_query($conn,$sql34);
        $result_row = mysqli_fetch_assoc($result34);


        if ($result_row['user_profile_img'] !== '') {
            $file_path = "../../imagesprofile/" . $result_row['user_profile_img'];
            if (unlink($file_path)) {
                echo "File deleted successfully.";
            } else {
                echo "Unable to delete the file.";
            }
        }


        // Specify the destination directory for the uploaded image
        $destination = '../../imagesprofile/' . $newimagename;

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($tmpname, $destination)) {
            $updateFields[] = "`user_profile_img`='$newimagename'";

        } else {
            echo "Failed to upload image.";
            exit; // Exit script if image upload fails
        }
    }

    // SQL query to update user information in the database
    if (!empty($updateFields)) {
        $sql = "UPDATE `registered_user` SET " . implode(', ', $updateFields) . " WHERE `username`='$username'";

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) {
            header("Location:../my_bookings/mybookings.php");
            exit; // Exit script after redirection
        } else {
            header("Location:Edit_account.php");
            exit; // Exit script after redirection
        }
    } else {
        echo "No fields to update.";
    }
}
?>
