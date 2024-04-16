<?php

// Include the HTML content
require_once("../../Components/Header/header.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WIX-Air||Reservation</title>
        <link rel="stylesheet" href="Reservation.css">
    </head>
    <body>
    <div class="container">
        <h1>Reserve Your Seat</h1>
        <h3>Click on the selected Seat or Manually Enter the seat Number</h3>
        <p>In this seating arrangement:</p>
        <p>
        <ul>
            <li>Rows are numbered consecutively from 1 to 33.</li>
            <li>Seats on the left side are identified by the letter 'L' followed by a number.</li>
            <li>Seats on the right side are identified by the letter 'R' followed by a number.</li>
            <li>The numbering starts from the center and expands outward.</li>
        </ul>
        </p>
        <p>For instance, in row 1, the leftmost seat would be labeled "L1", the rightmost seat "R1",
            and proceeding inwards from both sides.
        </p>
    </div>

    <div class="box1">
        <form>
            <input type="text" class="seatnum" id="seatnum"name="seatnum">
            <div>
                <input type="text" class="seatnum" id="seatnum"name="seatnum">
            </div>

            <button class="submitbtn">Submit</button>
        </form>
    </div>

    <div class="container">
        <h1>Baggage details</h1>
        <h3>Click on the selected Package</h3>
    </div>

    <div class="box2">
        <h1>Cabin Baggage</h1>
        <div class="container1">
            <div class="box3">
                <img src="../../src/bag1.jpg" id="bag1">
                <p><h4>1 Small Bag</h4></p>
                <p id="size">40cm*25cm*20cm</p>
            </div>
            <form>
                <label>0 Rs</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="yes_or_no" name="yes_or_no" value="yes_or_no">
            </form>
        </div>
        <div class="container2">
            <div class="box4">
                <div class="b1">
                    <img src="../../src/bag1.jpg" id="bag1">
                    <p><h4>1 Small Bag</h4></p>
                    <p id="size">40cm*25cm*20cm</p>
                </div>
                <div class="b2">
                    <img src="../../src/plus.jpg" id="plus">
                </div>
                <div class="b3">
                    <img src="../../src/bag.jpg" id="bag2">
                    <p><h4>1 Small Bag + 1 Carry-On bag</h4></p>
                    <p id="size">10kg,55cm*40cm*20cm</p>
                </div>
            </div>
            <form>
                <label>+4000 Rs</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="yes_or_no" name="yes_or_no" value="yes_or_no">
            </form>
        </div>
    </div>

    <div class="box2">
        <h1>Checked Bags</h1>
        <div class="container1">
            <div class="box3">
                <img src="../../src/bag1.jpg" id="bag1" alt="smallbag">
                <p><h4>1 Small Bag</h4></p>
                <p id="size">40cm*25cm*20cm</p>
            </div>
            <form>
                <label>0 Rs</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="yes_or_no" name="yes_or_no" value="yes_or_no">
            </form>
        </div>
        <div class="container2">
            <div class="box4">
                <div class="b1">
                    <img src="../../src/bag1.jpg" id="bag1">
                    <p><h4>1 Small Bag</h4></p>
                    <p id="size">40cm*25cm*20cm</p>
                </div>
                <div class="b2">
                    <img src="../../src/plus.jpg" id="plus">
                </div>
                <div class="b3">
                    <img src="../../src/bag.jpg" id="bag2">
                    <p><h4>1 Small Bag + 1 Carry-On bag</h4></p>
                    <p id="size">10kg,55cm*40cm*20cm</p>
                </div>
            </div>
            <form>
                <label>+4000 Rs</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="yes_or_no" name="yes_or_no" value="yes_or_no">
            </form>
        </div>
    </div>

    </body>
    </html>


<?php
// Include the HTML content
require_once("../../Components/Footer/Footer.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';
?>