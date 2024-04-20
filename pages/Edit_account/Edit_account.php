<?php

// Include the HTML content
require_once("../../Components/Header/header.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';
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
            <form action="Edithandler.php" method="POST">
                <div class="box1">
                    <label for="name">Name</label>
                    <input type="text" class="name" id="firstname" name="name">

                    <label for="birth">Date Of Birth</label>
                    <input type="date" class="lastname" id="birth" name="birth">

                    <label for="gender">Gender</label>
                    <input type="text" class="email" id="email" name="gender">

                    <label for="City">City</label>
                    <input class="City" id="City" name="City"/>

                    <label for="passnum">Passport Number</label>
                    <input type="text" class="passnum" id="passnum" name="passnum">

                    <label for="bio">Bio</label>
                    <input type="text" class="gender" id="bio" name="bio">
                </div>
                <div class="box2">
                    <img alt="profile" src="../../src/users.webp">
                    <label for="profile">Profile Image</label>
                    <input type="file" class="image" id="image" name="profile">
                    <p id="img_up">Please provide images in JPG, JPEG, or PNG formats.
                    </p>
                    <label for="mobile">Mobile Number</label>
                    <input type="text" class="gender" id="mobile" name="mobile">

                    <label for="needs">Special Needs</label>
                    <input type="text" class="gender" id="gender" name="needs">
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