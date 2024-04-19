<?php
// Include the HTML content
require_once("../../Components/Header/header.php");

echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';

require_once("../../php/dbconnection.php");

/* Prevent accessing without signing in */
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header("Location: ../signin/signin.php");
    exit(); // Exit the script after redirection
}

/* Database */
$sql = "SELECT * FROM `registered_user` WHERE  `username`='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mybookings.css">
    <title>WIX-Air | My Account</title>
</head>
<body>
<header>
    <div class="container">
        <div class="notification">
            <?php
            if(isset($row['name']) && !empty($row['name'])) {
                echo $row['name'];
            } else {
                echo "Not provided";
            }
            ?>  &nbsp;||&nbsp; <?php echo $row['username']; ?>
        </div>
        <div>
            <p id="email"><?php echo $row['email']; ?></p>
        </div>
    </div>

    <div class="container1">
        <div class="tabs">
            <input type="radio" id="radio-1" name="tabs" checked="">
            <label class="tab" for="radio-1">Basic Details</label>
            <input type="radio" id="radio-2" name="tabs">
            <label class="tab" for="radio-2">Bookings & Payments</label>
            <input type="radio" id="radio-3" name="tabs">
            <label class="tab" for="radio-3">Review & Suggestions</label>
            <span class="glider"></span>
        </div>
    </div>
</header>

<!-- End of Common Header section -->

<section class="content active">
    <div class="container">
        <div>
            <?php echo $row['name']; ?>
        </div>
        <div>
            <h1>Basic Details</h1>
            <p>Make sure this information matches your travel ID, like your passport or license.</p>
            <div class="basic">
                <div class="left">
                    <div>
                        <h5>Name</h5>
                        <p><?php
                            if(isset($row['name']) && !empty($row['name'])) {
                                echo $row['name'];
                            } else {
                                echo "Not provided";
                            }
                            ?></p>
                    </div>

                    <div>
                        <h5>Date of Birth</h5>
                        <p>not provided</p>
                    </div>

                    <div>
                        <h5>Accessibility needs</h5>
                        <p>not provided</p>
                    </div>
                </div>

                <div class="right">
                    <div>
                        <h5>Bio</h5>
                        <p>Keep calm study well</p>
                    </div>

                    <div>
                        <h5>Gender</h5>
                        <p>male</p>
                    </div>

                    <div>
                        <h5>Passport Number</h5>
                        <p>not provided</p>
                    </div>
                </div>
                <div>
                    <a href="../../pages/Edit_account/Edit_account.php"><h4 class="editAc">Edit Your Account</h4></a>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div>
            <h1>Contact</h1>
            <p>Receive account activity alerts and trip updates by sharing this information.</p>
            <div class="basic">
                <div class="left">
                    <div>
                        <h5>Mobile Number</h5>
                        <p>+94 76 347 2790</p>
                    </div>

                    <div>
                        <h5>City</h5>
                        <p>not provided</p>
                    </div>
                </div>

                <div class="right">
                    <div>
                        <h5>Email</h5>
                        <p>venurajayasingha1@gmail.com</p>
                    </div>

                    <div>
                        <h5>Postal Code</h5>
                        <p>not provided</p>
                    </div>
                </div>
                <div>
                    <a href="../../pages/Edit_account/Edit_account.php"><h4 class="editAc">Edit Your Account</h4></a>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div>
            <div class="wrapper_cont">
                <div class="wrapp1">
                    <h1>More details</h1>
                    <p>Speed up your booking by securely saving essential travel details.</p>
                    <div class="sublist">
                        <div>
                            <h4>Air Port Security Check</h4>
                            <p> Pre-check and luggage check ID</p>
                        </div>
                        <div class="wrapper01">
                            <img class="arrow" src="../../src/arrow-right.png" alt="arrow">
                        </div>
                    </div>

                    <div class="sublist">
                        <div>
                            <h4>Travel Documents</h4>
                            <p>Passport</p>
                        </div>
                        <div class="wrapper01">
                            <img class="arrow" src="../../src/arrow-right.png" alt="arrow">
                        </div>
                    </div>

                    <div class="sublist">
                        <div>
                            <h4>Flight preferences</h4>
                            <p> Hometown,flights</p>
                        </div>
                        <div class="wrapper01">
                            <img class="arrow" src="../../src/arrow-right.png" alt="arrow">
                        </div>
                    </div>

                    <div class="sublist">
                        <div>
                            <h4>Reward Programs</h4>
                            <p> Frequent Flyer and membership programs</p>
                        </div>
                        <div class="wrapper01">
                            <img class="arrow" src="../../src/arrow-right.png" alt="arrow">
                        </div>
                    </div>
                </div>
                <div class="wrapp2">
                    <div>
                        <h1>Additional travelers</h1>
                        <p>Make booking a breeze by saving profiles of family, friends, or teammates who often travel with you.</p>
                    </div>
                    <div>
                        <button class="add_button"> Add Another Partner</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content1 active">
<div class="container">
<h1>Your Recent Flight Bookings</h1>

    <div class="sinticket">
        <div>
            <div>
                <h4>4.00 pm - 3.45 pm</h4>
                <p>Colombo(CMB)-Toronto(YYZ)</p>
                <p>Sri Lankan Air Lines</p>
            </div>
        </div>

        <div>
            <div>
                <p>33h 55min(2 stops)</p>
                <p>6 hour 15 min in India.6 hour 10 min in Paris</p>
            </div>
        </div>

        <div>
            <p>Seat No : 23R</p>
            <h2>Rs 3,000,000</h2>
            <p>Round trip</p>

        </div>
    </div>

    <div class="sinticket">
        <div>
            <div>
                <h4>8.35 pm - 9.00 am</h4>
                <p>Colombo(CMB)-Toronto(YYZ)</p>
                <p>Emirates</p>
            </div>
        </div>

        <div>
            <div>
                <p>22h 25min(2 stops)</p>
                <p>1 hour 25 min in Male.1 hour 30 min in Dubai</p>
            </div>
        </div>

        <div>
            <p>Seat No : 26R</p>
            <h2>Rs 3,200,000</h2>
            <p>Round trip</p>

        </div>
    </div>

    <div class="sinticket">
        <div>
            <div>
                <h4>4.00 pm - 3.45 pm</h4>
                <p>Toronto(YYZ)-Colombo(CMB)</p>
                <p>Sri Lankan Air Lines</p>
            </div>
        </div>

        <div>
            <div>
                <p>33h 55min(2 stops)</p>
                <p>6 hour 15 min in India.6 hour 10 min in Paris</p>
            </div>
        </div>

        <div>
            <p>Seat No : 43R</p>
            <h2>Rs 3,000,000</h2>
            <p>Round trip</p>

        </div>
    </div>
</div>
</section>
<section class="cont1 active">
    <div class="container ">
        <h1>Your Saved Card Details</h1>
        <div class="pays">
            <h4 class="titlesec">My Account Info</h4>
            <div>
                <h3>Payment Methods</h3>
                <div class="card">
                    <div>
                        <p>Visa</p>
                    </div>
                    <div>
                        <p>**** **** **** 9445</p>
                    </div>
                    <div>
                        <p>J.A Venura Jayasingha</p>
                    </div>

                    <div>
                        <p>Added on 2024.04.05</p>
                    </div>
                </div>
            </div>

            <h3>Connected Accounts</h3>
            <div class="card1">
                <div class="cont">
                   <img class="googicon" src="../../src/google.png" alt="google">
                </div>
                <div class="cont2">
                    <p>J.A Venura jayasingha</p>
                    <p>venurajayasingha1@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content2 active">
    <div class="container ">
        <h1>Your Reviews</h1>
        <div class="pays">
            <h4 class="titlesec">Admin Feedback Requests</h4>
            <div class="admin">
                <p>What happens When i missed My flight</p>
                <p>What are the ways to change the flight</p>
            </div>
            <h4>FAQ Questions</h4>
            <div class="FA">
                <p>What happens When i missed My flight</p>
                <p>What are the ways to change the flight</p>
            </div>
            <h5>Thank You For Your Suggestions We Are Looking Forward For Your Next Journey With Us</h5>
            </div>

        </div>
</section>

<script src="mybookings.js"></script>
</body>

<?php
// Include the HTML content
require_once("../../Components/Footer/Footer.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';
?>
