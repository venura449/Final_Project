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
            Sri-Lanka to Canada - UFL3467- Sri Lanka Airlines
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
                        <li><b>Departing From :</b> Sri Lanka</li>
                        <li><b>Arrive To : </b>Canada</li>
                        <li><b>Departing Time : </b>12-06-2024 10:23 PM</li>
                        <li><b>Arrival Time : </b>13-06-2024 08:24 AM</li>
                        <li><b>Total Flight Duration </b> 6 Hours</li>
                        <li><b>Total Seats : </b>50</li>
                        <li><b>Total Economy Seats : </b>30</li>
                        <li><b>Total Business Seats : </b>20</li>
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
                        Passenger Count
                    </div>
                    <form class="item__description1">
                        <label> Adults
                            <input
                                    type="text"
                                    class="num"
                                    name="adults"
                                    pattern="[0-2]{1}"
                            />
                        </label>
                        <label> Children
                            <input
                                    type="text"
                                    class="num"
                                    name="children"
                                    pattern="[0-2]{1}"
                            />
                        </label>
                        <label> Pets
                            <input type="text" class="num" name="pets"/>
                        </label>
                        <button type="submit" class="second_submit">Submit</button>
                    </form>
                    <div class="warning">
                        * Maximum Number of tickets are in single attempt is Currently limited to 2
                    </div>
                </div>
</section>

<section>
    <div class="details2 shadow">
        <div class="details__item">
            <form class="item__details1" method="post" action="#">
                <div class="item__title">
                    Passenger Details
                </div>
                <div>
                    <h2 class="headtitle">Adult 01</h2>
                </div>
                <div class="item__description2">
                    <label> Name
                        <input type="text" class="num" name="adults"/>
                    </label>
                    <label> Age
                        <input type="text" class="num" name="children"/>
                    </label>
                    <label> Address
                        <input type="text" class="num" name="pets"/>
                    </label>
                    <label> Contact Number
                        <input type="text" class="num" name="pets"/>
                    </label>
                    <label> Passport Number
                        <input type="text" class="num" name="pets"/>
                    </label>
                </div>
                <div>
                    <h2 class="headtitle">Adult 02</h2>
                </div>
                <div class="item__description2">
                    <label> Name
                        <input type="text" class="num" name="adults"/>
                    </label>
                    <label> Age
                        <input type="text" class="num" name="children"/>
                    </label>
                    <label> Address
                        <input type="text" class="num" name="pets"/>
                    </label>
                    <label> Contact Number
                        <input type="text" class="num" name="pets"/>
                    </label>
                    <label> Passport Number
                        <input type="text" class="num" name="pets"/>
                    </label>
                </div>

                <div>
                    <h2 class="headtitle">Child 01</h2>
                </div>
                <div class="item__description2">
                    <label> Name
                        <input type="text" class="num" name="adults"/>
                    </label>
                    <label> Age
                        <input type="text" class="num" name="children"/>
                    </label>
                    <label> Address
                        <input type="text" class="num" name="pets"/>
                    </label>
                    <label> Contact Number
                        <input type="text" class="num" name="pets"/>
                    </label>
                    <label> Passport Number
                        <input type="text" class="num" name="pets"/>
                    </label>
                </div>

                <div>
                    <h2 class="headtitle">Child 02</h2>
                </div>
                <div class="item__description2">
                    <label> Name
                        <input type="text" class="num" name="adults"/>
                    </label>
                    <label> Age
                        <input type="text" class="num" name="children"/>
                    </label>
                    <label> Address
                        <input type="text" class="num" name="pets"/>
                    </label>
                    <label> Contact Number
                        <input type="text" class="num" name="pets"/>
                    </label>
                    <label> Passport Number
                        <input type="text" class="num" name="pets"/>
                    </label>

                    <button
                            type="submit"
                            class="second_submit2">
                            Submit
                    </button>
                </div>
            </form>

        </div>

    </div>
</section>

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
