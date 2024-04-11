<?php
/*header*/
require_once ("../../Components/Header/header.php");

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
    <title></title>

    <!--Link for Cascading Style sheet(CSS)-->
    <link rel="stylesheet" href="submit_details.css">

</head>
<body>
<header>

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
            Sri-Lanka to Canada - UFL3467- Sri Lanka Airlines
        </div>
    </div>

</header>
<div class="details shadow">
    <div class="details__item">
        <div class="item__details">
            <div class="item__title">
                Sri-Lanka to Canada - UFL3467
            </div>
            <div class="item__price">
                Rs 1,110,000 /=
            </div>
            <div class="item__quantity">
                <img id="img_grant" src="../../src/grant.png" alt="access_seal">
            </div>
            <div class="item__description">
                <ul style="none">
                    <li><b>Departing From :</b> Sri Lanka</li>
                    <li><b>Arrive To : </b>Canada</li>
                    <li><b>Departing Time : </b>12-06-2024 10:23 PM</li>
                    <li><b>Arrival Time : </b>13-06-2024 08:24 AM</li>
                    <li><b>Air-Line Name : </b>Sri Lankan Air Lines</li>
                </ul>

            </div>

        </div>
    </div>

</div>

</body>

</html>

<?php
/*header*/
require_once ("../../Components/Footer/Footer.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';

?>
