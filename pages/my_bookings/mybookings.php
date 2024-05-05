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


/* Database fetching for Basic details */
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
        <div class="circle">
            <?php
            $imgqury = "SELECT * FROM `registered_user` WHERE username = '$username'";
            $resultimg = mysqli_query($conn, $imgqury);
            $rowimg = mysqli_fetch_assoc($resultimg);
            if ($resultimg) {
                // Check if any rows were returned
                if ($rowimg['user_profile_img']!='') {
                    echo '<img src="../../imagesprofile/' . $rowimg['user_profile_img'] . '" alt="profile">';
                }
                else {
                    echo '<img alt="profile" src="../../src/users.webp"/>';
                }
            }
            ?>
        </div>


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
                        <p>
                            <?php
                            if(isset($row['name']) && !empty($row['name'])) {
                                echo $row['name'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
                    </div>

                    <div>
                        <h5>Date of Birth</h5>
                        <p>
                            <?php
                            if(isset($row['dob']) && !empty($row['dob'])) {
                                echo $row['dob'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
                    </div>

                    <div>
                        <h5>Accessibility needs</h5>
                        <p>
                            <?php
                            if(isset($row['special_need']) && !empty($row['special_need'])) {
                                echo $row['special_need'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <div class="right">
                    <div>
                        <h5>Bio</h5>
                        <p>
                            <?php
                            if(isset($row['bio']) && !empty($row['bio'])) {
                                echo $row['bio'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
                    </div>

                    <div>
                        <h5>Gender</h5>
                        <p>
                            <?php
                            if(isset($row['gender']) && !empty($row['gender'])) {
                                echo $row['gender'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
                    </div>

                    <div>
                        <h5>Passport Number</h5>
                        <p>
                            <?php
                            if(isset($row['passport']) && !empty($row['passport'])) {
                                echo $row['passport'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
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
                        <p>
                            <?php
                            if(isset($row['mobile_number']) && !empty($row['mobile_number'])) {
                                echo $row['mobile_number'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
                    </div>

                    <div>
                        <h5>City</h5>
                        <p>
                            <?php
                            if(isset($row['city']) && !empty($row['city'])) {
                                echo $row['city'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <div class="right">
                    <div>
                        <h5>Email</h5>
                        <p>
                            <?php
                            if(isset($row['email']) && !empty($row['email'])) {
                                echo $row['email'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
                    </div>

                    <div>
                        <h5>Postal Code</h5>
                        <p>
                            <?php
                            if(isset($row['postalcode']) && !empty($row['postalcode'])) {
                                echo $row['postalcode'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </p>
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
                        <button class="add_button" onclick="window.location.href='../signin/signin.php'"> Add Another Partner</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$sql = "SELECT ru.*, r.*, f.*
                        FROM registered_user AS ru
                        INNER JOIN reservation AS r ON ru.User_ID = r.user_id
                        INNER JOIN flights AS f ON r.flight_id = f.flight_ID
                        WHERE ru.username = '$username';
";
$result = mysqli_query($conn, $sql);



?>

<section class="content1 active">
    <div class="container">
        <h1>Your Recent Flight Bookings</h1>


        <?php
        // Loop through each flight booking data fetched from the database
        if (mysqli_num_rows($result) > 0) {
            while ($rowin = mysqli_fetch_assoc($result)) {
                ?>
                <div class="sinticket">
                    <div>
                        <div>
                            <h4><?php echo $rowin['departure_time'] . ' - ' . $rowin['arrival_time']; ?></h4>
                            <p><?php echo $rowin['departure'] . ' - ' . $rowin['arrival']; ?></p>
                            <p><?php echo $rowin['airline']; ?></p>
                        </div>
                    </div>

                    <div>
                        <div>
                            <p>Flight Duration : <b><?php echo $rowin['duration']; ?> hours</b></p>
                            <p> Ticket Class : <b><?php echo $rowin['class']; ?></b></p>
                            <p> Reference Number : <b><?php echo $rowin['ref_id']; ?></b></p>
                        </div>
                    </div>

                    <div>
                        <p>Seat No: <?php echo $rowin['seat_no']; ?></p>
                        <?php $totalprice = $rowin['price']+$rowin['Luggage'];?>
                        <h2>Rs <?php echo number_format($totalprice, 2); ?></h2>
                        <p><?php echo $rowin['passport']; ?></p>
                    </div>
                </div>
                <?php
            }
        } else {
            // If no tickets are found, display a message
            echo "<p>No Ticket booked by you.</p>";
        }
        ?>


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
                    <p>
                        <?php
                        if(isset($row['name']) && !empty($row['name'])) {
                            echo $row['name'];
                        } else {
                            echo "Not provided";
                        }
                        ?>
                    </p>
                    <p>
                        <?php
                        if(isset($row['email']) && !empty($row['email'])) {
                            echo $row['email'];
                        } else {
                            echo "Not provided";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$sql = "SELECT f.*
    FROM `feedback` AS f
    INNER JOIN `registered_user` AS ru ON f.user_id = ru.User_ID
    WHERE ru.username = '$username'";
$result = mysqli_query($conn, $sql);

?>
<section class="content2 active">
    <div class="container ">
        <h1>Your Reviews</h1>
        <div class="pays">
            <h4 class="titlesec">Admin Feedback Requests</h4>
            <div class="admin">
                <?php
                while ($rowfe = mysqli_fetch_assoc($result)) {
                    ?>
                    <p><?php echo $rowfe['question']; ?></p>
                    <?php
                    // Check if there is a reply
                    if (!empty($rowfe['reply'])) {
                        ?>
                        <span id="reply"><?php  echo "Reply : ".$rowfe['reply']; ?></span>
                        <?php
                    } else {
                        // Display a message when there is no reply
                        ?>
                        <span id="reply">No reply for this message</span>
                        <?php
                    }
                }
                ?>
            </div>

            <?php
            $sql = "SELECT i.*
                    FROM `inquire` AS i
                    INNER JOIN `registered_user` AS ru ON i.user_id = ru.User_ID
                    WHERE ru.username = '$username'";
            $result = mysqli_query($conn, $sql);

            ?>
            <h4>FAQ Questions</h4>
            <div class="FA">
                <?php
                while ($rowfa = mysqli_fetch_assoc($result)) {
                    ?>
                    <p><?php echo $rowfa['question']; ?></p>
                    <?php
                }
                ?>
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