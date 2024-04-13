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
            <input type="radio" id="radio-2" name="tabs" >
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
            <h4>Your ticket Number is #64Yg678</h4>
        </div>
        <div class="totalwrapper">
            <div class="textwrapper">
                <h2>Flight Details</h2>
                <ul class="listflight">
                    <li><span>Departure Time :</span> 12-06-2024 10:23 PM</li>
                    <li><span>Arrival Time : </span>13-06-2024 08:24 AM  </li>
                    <li><span>Ticket Number :</span> #64Yg678 </li>
                    <li><span>Air Line Name :</span> Sri Lankan Airlines </li>
                    <li><span>Total Flight Duration :</span> 6 Hours</li>
                </ul>
                <h2>Booking Details</h2>
                <ul class="listflight">
                    <li><span>Number Of Adult Passengers :</span> 1</li>
                    <li><span>Number of Under Aged Passengers :</span> 1 </li>
                    <li><span>Number of Pets :</span> 0 </li>
                    <li><span>Total Baggage Weight(Kg) :</span> 25 </li>

                </ul>
            </div>


            <div class="imagewrapper">
                <img  class="srcimg" src="../../src/approved.jpeg" >
            </div>

        </div>
        <div class="warsec">
            <p>*Seat Numbers and other details can be found in personal tickets in my bookings section
                or personal Email version of ticket</p>
        </div>
</section>


<section>
    <div class="thirdWrapper">
        <div>
            <h2>Thank you For Choosing Sri Lankan AIr lines</h2>
            <p>You can View Your Booked Ticket  in My bookings Page</p>
        </div>
        <div class="thirdwrapper2">
            <button class="mybookings">My Bookings</button>
        </div>
    </div>
</section>




</body>


<?php
// Include the HTML content
require_once("../../Components/Footer/Footer.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';
?>
<script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</script>

