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
            <form action="#" method="POST">
                <div class="box1">
                    <label for="firstname">First Name</label>
                    <input type="text" class="firstname" id="firstname" name="firstname">

                    <label for="lastname">Last Name</label>
                    <input type="text" class="lastname" id="lastname" name="lastname">

                    <label for="email">Email</label>
                    <input type="email" class="email" id="email" name="email">

                    <label for="City">City</label>
                    <input class="City" id="City" name="City"/>

                    <label for="passnum">Passport NUmber</label>
                    <input type="text" class="passnum" id="passnum" name="passnum">

                    <label for="gender">Gender</label>
                    <input type="text" class="gender" id="gender" name="gender">


                </div>
                <div class="box2">
                    <img alt="profile" src="../../src/users.webp">
                    <label for="profile">Profile Image</label>
                    <input type="file" class="image" id="image" name="profile">
                    <p id="img_up">Please provide images in JPG, JPEG, or PNG formats.
                    </p>
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