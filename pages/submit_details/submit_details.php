<?php
/*header*/
require_once("../../Components/Header/header.php");
require_once("../../php/dbconnection.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';


// Fetching flight id using get method
if (isset($_GET['flightid'])) {
    $selected_flight_id = $_GET['flightid'];
}
else{
    echo "error";
}
$sql = "SELECT * FROM `flights` WHERE `flight_ID`= '$selected_flight_id'";
$result = mysqli_query($conn, $sql);
$data_row = mysqli_fetch_assoc($result);

$_SESSION['f_id'] = $selected_flight_id;
$_SESSION['price']=$data_row['price'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!--Link for Cascading Style sheet(CSS)-->
    <link rel="stylesheet" href="submit_details.css">

</head>

<body>
<section>

    <div class="container1">
        <div class="tabs">
            <input type="radio" id="radio-1" name="tabs" checked="">
            <label class="tab" for="radio-1">Submit Details</label>
            <input type="radio" id="radio-2" name="tabs">
            <label class="tab" for="radio-2">Payment Portal</label>
            <input type="radio" id="radio-3" name="tabs">
            <label class="tab" for="radio-3">E-Ticket Portal </label>
            <span class="glider"></span>
        </div>
    </div>
    <div class="container">
        <div class="notification">
            <?php echo $data_row['departure'] ?> to  <?php echo $data_row['arrival'] ?> -
            <?php echo $data_row['flight_ID'] ?>-  <?php echo $data_row['airline'] ?>
        </div>
    </div>
</section>

<section>
    <div class="details shadow">
        <div class="details__item">
            <div class="item__details">
                <div class="item__title">
                    Flight Details
                </div>
                <div class="item__price">
                </div>
                <div class="item__quantity">
                    <img id="img_grant" src="../../src/hj.jpg" alt="access_seal">
                    <img id="img_grant1" src="../../src/wer.avif" alt="access_seal">
                </div>
                <div class="item__description">
                    <ul style="none">
                        <li><b>Departing From :</b>  <?php echo $data_row['departure'] ?></li>
                        <li><b>Arrive To : </b> <?php echo $data_row['arrival'] ?></li>
                        <li><b>Departing Time : </b> <?php echo $data_row['departure_time'] ?></li>
                        <li><b>Arrival Time : </b> <?php echo $data_row['arrival_time'] ?></li>
                        <li><b>Total Flight Duration </b>  <?php echo $data_row['duration'] ?>&nbsp;Hours</li>
                        <li><b>Total Seats : </b> <?php echo $data_row['economy_seats']+$data_row['business_seats'] ?></li>
                        <li><b>Total Economy Seats : </b> <?php echo $data_row['economy_seats'] ?></li>
                        <li><b>Total Business Seats : </b> <?php echo $data_row['business_seats'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
</section>

<section class="section_2">
    <div class="details shadow1">
        <div class="details__item">
            <div class="item__details1">
                <div class="item__title">
                    Seat Selection
                </div>
                <h5>Select Your Seat And Luggage by clicking below </h5>
                <label><a href="../Reservation_page/Reservation.php">Seat Selection</a></label>
                <div class="warning">
                    * Maximum Number of seats are in single attempt is Currently limited to 1
                </div>
            </div>
</section>

<section>
    <div class="details2 shadow">
        <div class="details__item">
            <form class="item__details1" method="post" action="../payment_portal/payment.php">
                <div class="item__title">
                    Passenger Details
                </div>
                <div>
                    <h5 class="headtitle">This Information Will be printed on Your ticket be careful when entering data</h5>
                </div>
                <div class="item__description2">
                    <label> Name
                        <input type="text"  class="num" name="pas_name" />
                    </label>
                    <label> Age
                        <input type="text" class="num" name="pas_age" />
                    </label>
                    <label> Address
                        <input type="text" class="num" name="pas_add" />
                    </label>
                    <label> Contact Number
                        <input type="text" class="num" name="pas_con" />
                    </label>
                    <label> Passport Number
                        <input type="text" class="num" name="pas_num" />
                    </label>


                </div>
                <button type="submit" class="second_submit">Submit</button>
            </form>

        </div>

    </div>
</section>

</body>

</html>

<?php
/*footer*/
require_once("../../Components/Footer/Footer.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';

?>
