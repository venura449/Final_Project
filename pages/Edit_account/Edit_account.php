<?php
// Include the HTML content
require_once("../../Components/Header/header.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';
require_once ("../../php/dbconnection.php");
$username = $_SESSION['username'];
?>

    <!DOCTYPE html>
    <html lang="en"'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Edit_account.css">
    </head>
    <body>

        <div id="title">
            <h1>Edit Your Profile</h1>
        </div>
    <div class="wrapper">
        <div class="container">
            <form action="Edithandler.php" method="POST" enctype="multipart/form-data">
                <div class="box1">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">

                    <label for="birth">Date Of Birth</label>
                    <input type="date" id="birth" name="birth">

                    <label for="gender">Gender</label>
                    <input type="text" id="gender" name="gender">

                    <label for="City">City</label>
                    <input type="text" id="City" name="City">

                    <label for="passnum">Passport Number</label>
                    <input type="text" id="passnum" name="passnum">

                    <label for="bio">Bio</label>
                    <input type="text" id="bio" name="bio">
                </div>
                <div class="box2">
                    <div class="circle">
                        <?php
                        $imgqury = "SELECT * FROM `registered_user` WHERE username = '$username'";
                        $resultimg = mysqli_query($conn, $imgqury);
                        if ($resultimg) {
                            // Check if any rows were returned
                            if (mysqli_num_rows($resultimg) > 0) {
                                // Fetch the row containing the image data
                                $rowimg = mysqli_fetch_assoc($resultimg);
                                // Output the image with the correct src attribute
                                echo '<img src="../../imagesprofile/' . $rowimg['user_profile_img'] . '"?> alt="profile">';
                            } else {
                                // No image found for this user, display backup image
                                echo '<img src="../../src/users.webp" alt="profile">';
                            }
                        } else {
                            echo "Error fetching image from the database: " . mysqli_error($conn);
                        }
                        ?>
                    </div>

                    <label for="image">Profile Image</label>
                    <input type="file" id="image" name="image">
                    <p id="img_up">Please provide images in JPG, JPEG, or PNG formats.</p>

                    <label for="mobile">Mobile Number</label>
                    <input type="text" id="mobile" name="mobile">

                    <label for="needs">Special Needs</label>
                    <input type="text" id="needs" name="needs">
                    <button type="submit">Save Changes</button>
                </div>
            </form>

        </div>
    </div>

    </body>


<?php
// Include the HTML content
require_once("../../Components/Footer/Footer.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';
?>