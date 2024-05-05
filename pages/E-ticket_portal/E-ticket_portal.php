<?php


// Include the HTML content
require_once("../../Components/Header/header.php");

require_once("../../php/dbconnection.php");


// Include the CSS file
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';

// Fetch the reference ID from session
$ref_id = $_SESSION['ref_id'];

// Fetch reservation data from the database
$sql = "SELECT * FROM `reservation` WHERE ref_id = $ref_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="E-ticket_portal.css">
    <title>Payment</title>
</head>
<body>
<header>
    <div class="container">
        <div class="notification">
            Thank You for Trusting us as Your Travel Partner
        </div>
    </div>

    <div class="container1">
        <div class="tabs">
            <input type="radio" id="radio-1" name="tabs">
            <label class="tab" for="radio-1">Submit Details</label>
            <input type="radio" id="radio-2" name="tabs">
            <label class="tab" for="radio-2">Payment Portal</label>
            <input type="radio" id="radio-3" name="tabs" checked="">
            <label class="tab" for="radio-3">E-Ticket Portal </label>
            <span class="glider"></span>
        </div>
    </div>
</header>

<section>
    <div class="wrapper">
        <div class="wrappersection">
            <h1>Booking Successful</h1>
            <h4>Your ticket Number is <?php echo $row['ref_id']; ?></h4> <!-- Echo the ticket number -->
        </div>
        <div class="totalwrapper">
            <div class="textwrapper">
                <h2>Flight Details</h2>
                <ul class="listflight">
                    <li><span>Name :</span> <?php echo $row['name']; ?></li>
                    <li><span>Address : </span><?php echo $row['address']; ?></li>
                    <li><span>Contact Number :</span> <?php echo $row['contact']; ?></li>
                    <li><span>Passport Number :</span> <?php echo $row['passport']; ?></li>
                    <li><span>Class :</span> <?php echo $row['class']; ?></li>
                </ul>
                <h2>Booking Details</h2>
                <ul class="listflight">
                    <?php $total = $row['price'] + $row['Luggage']?>
                    <li><span>Seat Number :</span> <?php echo $row['seat_no']; ?></li>
                    <li><span>Price :</span> Rs <?php echo $row['price']; ?> </li>
                    <li><span>Total price for luggage :</span> Rs <?php echo $row['Luggage']; ?> </li>
                    <li><span>Total payment :</span> Rs <?php echo $total ?> </li>
                    <?php

                    // Prepare email message
                    $message = "<h1>Reservation Confirmation</h1><br><p>Your reservation on Wix air flights are successfully Added</p><br><ul><li>Name : " . $_SESSION['name'] . "</li><li>Seat No : " . $row['seat_no'] . "</li><li>Class : " . $row['class'] . "</li><li>Departure : " . $_SESSION['departure'] . "</li><li>Arrival : " . $_SESSION['arrival'] . "</li><li>Reference No : " . $row['ref_id'] . "</li><li>Reference No : " . $_SESSION['trip_class'] . "</li></ul>";


                    // Send email using SMTP.js
                    echo '
<script>
    /* SmtpJS.com - v3.0.0 */
    var Email = {
        send: function (a) {
            return new Promise(function (n, e) {
                a.nocache = Math.floor(1e6 * Math.random() + 1), a.Action = "Send";
                var t = JSON.stringify(a);
                Email.ajaxPost("https://smtpjs.com/v3/smtpjs.aspx?", t, function (e) {
                    n(e)
                })
            })
        }, ajaxPost: function (e, n, t) {
            var a = Email.createCORSRequest("POST", e);
            a.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), a.onload = function () {
                var e = a.responseText;
                null != t && t(e)
            }, a.send(n)
        }, ajax: function (e, n) {
            var t = Email.createCORSRequest("GET", e);
            t.onload = function () {
                var e = t.responseText;
                null != n && n(e)
            }, t.send()
        }, createCORSRequest: function (e, n) {
            var t = new XMLHttpRequest;
            return "withCredentials" in t ? t.open(e, n, !0) : "undefined" != typeof XDomainRequest ? (t = new XDomainRequest).open(e, n) : t = null, t
        }
    };
    Email.send({
        Host: "smtp.elasticemail.com",
        Username: "venurajayasingha1@gmail.com",
        Password: "51D17D3B04EFC623A7948287E33946A30029",
        To: "' . $_SESSION['email'] . '",
        From: "venurajayasingha1@gmail.com",
        Subject: "Reservation Confirmation",
        Body: "' . $message . '"
    }).then(function(message) {
        console.log("Email sent successfully!");
    });
</script>';
                    ?>
                </ul>
            </div>
            <div class="imagewrapper">
                <img class="srcimg" src="../../src/approved.jpeg">
            </div>
        </div>
        <div class="warsec">
            <p>*Seat Numbers and other details can be found in personal tickets in my bookings section
                or personal Email version of ticket</p>
        </div>
    </div>
</section>

<section>
    <div class="thirdWrapper">
        <div>
            <h2>Thank you For Choosing Sri Lankan AIr lines</h2>
            <p>You can View Your Booked Ticket  in My bookings Page</p>
        </div>
        <div class="thirdwrapper2">
            <button onclick="window.location.href ='../my_bookings/mybookings.php' "class="mybookings">My Bookings</button>
        </div>
    </div>
</section>

<!-- Include Footer -->
<?php
require_once("../../Components/Footer/Footer.php");
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';
?>
<script>
    <!-- Include scripts -->
</script>
</body>
</html>
