
<?php

//header file
require_once ("../../php/dbconnection.php");
// Include the HTML content
require_once("../../Components/Header/header.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';

// Fetch booked seats from the database
$flight_id = $_SESSION['f_id'];
$sql = "SELECT * FROM `seats` WHERE flight_id = '$flight_id'";
$result = mysqli_query($conn, $sql);

//this array use to highlight the booked seats
// Create an array to store booked seat numbers
$bookedSeats = array();
while ($row = mysqli_fetch_assoc($result)) {
    $bookedSeats[] = $row['seat_number'];
}


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
            <li>Rows are numbered consecutively from 1 to 22.</li>
            <li>Seats on the left side are identified by the letter 'L' followed by a number.</li>
            <li>Seats on the right side are identified by the letter 'R' followed by a number.</li>
            <li>The numbering starts from the corner and expands inward.</li>
        </ul>
        </p>
        <p>For instance, in row 1, the leftmost seat would be labeled "L1", the rightmost seat "R67",
            and proceeding inwards from both sides.
        </p>
    </div>
    <div class="container">

            <h1>Seat Booking</h1>
            <p>*Seats Highlighted in yellow color are already booked</p>
            <div class="seats-container" id="seatsContainer">
                <!-- Seats will be dynamically generated here -->
            </div>
        <div>
        </div>
        </div>

    <div class="box1">

        <form action="reservation_data_patch.php" method="post">
            <h2>Enter Your Sheet Manually</h2>
            <label>&nbsp;&nbsp;&nbsp;Customer 01 </label><br>
            <input type="text" class="seatnum" id="seatnum" name="seatnum" placeholder="Enter Customer 01 Seat Number">
            <br>
            <h2>Enter Your luggage Fees </h2>
            <label>&nbsp;&nbsp;&nbsp;Customer 01 </label><br>
            <input required type="text" class="seatnum" id="lugnum" name="lugnum" placeholder="Enter Customer 01 luggage">
            <br>
            <h2>Enter Your  Additional luggage Fees</h2>
            <label>&nbsp;&nbsp;&nbsp;Customer 01 </label><br>
            <input  required  type="text" class="seatnum" id="lugnumadd" name="lugnumadd" placeholder="Enter Customer 01 Additional luggage">
            <br>
            <p id="warn">Luggage Fees Are Automatically Calculated When You Clicked The Relevant Package.If You Have Different
                Luggage You Can <a href="../contact_us/contact_us.php">Contact Us</a></p>

            <button class="submitbtn">Submit</button>
        </form>
    </div>

    <div class="container1">
        <h1>Select Your Luggage Type</h1>
        <div class="box2">

            <div class="cont1">
                <div class="box3">
                    <img src="../../src/bag1.jpg" id="bag1">
                    <p><h4>1 Small Bag</h4></p>
                    <p id="size">40cm*25cm*20cm</p>
                </div>
                <div>
                    <label>0 Rs</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="yes_or_no" class="group1" name="yes_or_no" value="0">
                </div>
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
                        <p id="size">32kg,55cm*40cm*20cm</p>
                    </div>
                </div>
                <form>
                    <label>Rs +8000 </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="yes_or_no" class="group1" name="add_4000" value="8000">
                </form>
            </div>
        </div>
        <div class="restrictions">
            <ul>
                <li>
                    <p>
                        <b>Checked Baggage Weight Limit:</b> Airlines often impose weight limits for checked baggage,
                        typically ranging from 20 kg (44 lbs) to 32 kg (70 lbs) per bag.
                        However, these limits can vary depending on the airline and ticket class.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Carry-On Baggage Allowance:</b> Most airlines allow passengers to bring one
                        carry-on bag and one personal item, such as a purse or laptop bag, into
                        the cabin. The maximum weight for carry-on luggage is usually around
                        7 kg (15 lbs), but dimensions and weight restrictions may vary by airline.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Size Restrictions:</b> Airlines also enforce size restrictions for both checked
                        and carry-on luggage to ensure it fits in overhead bins or under the seat in
                        front of you. Typical maximum dimensions for carry-on bags are around 40 x 25
                        x 20 centimeters.
                    </p>
                </li>
            </ul>
        </div>
    </div>

    <div class="container1">
        <h1>Additional Luggage Options</h1>
        <div class="box2">

            <div class="cont1">
                <div class="box3">
                    <img src="../../src/bag1.jpg" id="bag1">
                    <p><h4>1 Small Bag</h4></p>
                    <p id="size">40cm*25cm*20cm</p>
                </div>
                <form>
                    <label>Rs +2000 </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="yes_or_no" class="group2" name="yes_or_no" value="2000">
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
                        <p id="size">32kg,55cm*40cm*20cm</p>
                    </div>
                </div>
                <form>
                    <label> Rs+ 16000 </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="yes_or_no" class="group2" name="yes_or_no" value="16000">
                </form>


            </div>

        </div>
        <div class="restrictions">
            <ul>
                <li>
                    <p>
                        <b>Excess Baggage Fees: </b>If your luggage exceeds the weight or size limits
                        specified by the airline, you may incur additional fees. These fees can
                        vary widely depending on the airline, route, and the extent to which your
                        luggage exceeds the limits.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Security Regulations:</b> Be aware of security regulations regarding prohibited
                        items in both checked and carry-on luggage. Certain items, such as sharp objects,
                        liquids over 100ml, and flammable materials, are restricted or prohibited for air travel.
                        We strictly check for those in addition luggage section.
                    </p>
                </li>
            </ul>
        </div>
    </div>



    <input type="hidden" id="bookedSeats" value="<?php echo implode(',', $bookedSeats); ?>">
    <script src="Reservation.js"></script>
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