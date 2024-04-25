<?php
//requesting Database Connection
require_once("../../php/dbconnection.php");

// Include header Component
require_once("../../Components/Header/header.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';

//if User is not signed in redirect to the sign in
if (!isset($_SESSION['username'])) {
    header("Location:../signin/signin.php");
    exit();
}

    // Store session variables in local variables
    $name = $_POST['pas_name'];
    $age = $_POST['pas_age'];
    $address = $_POST['pas_add'];
    $contact_num = $_POST['pas_con'];
    $passport_num = $_POST['pas_num'];

    $currentDate = date("Y-m-d");

    //session retrieving
    $flight_id = $_SESSION['f_id'];
    $seat_num = $_SESSION['seatnum'];
    $lug_num = $_SESSION['lugnum'] =
    $lug_num_add = $_SESSION['lugnumadd'];


    //session assigning
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;
    $_SESSION['address'] = $address;
    $_SESSION['contact']=$contact_num;
    $_SESSION['passport']=$passport_num;


    //retrieve Flight data from database to display flight details
    $sql = "SELECT * FROM `flights` WHERE `flight_ID`= '$flight_id'";
    $result = mysqli_query($conn, $sql);
    $data_row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <title>Payment</title>
</head>
<body>

<!--this part contains the back and forward navigation bar-->
<header>

    <!--Middle title div-->
    <div class="container">
        <div class="notification">
            Just One Step Ahead From Your Tour
        </div>
    </div>

    <!-- this contains menu items-->
    <div class="container1">
        <div class="tabs">
            <input type="radio" id="radio-1" name="tabs">
            <label class="tab" for="radio-1">Submit Details</label>
            <input type="radio" id="radio-2" name="tabs" checked="">
            <label class="tab" for="radio-2">Payment Portal</label>
            <input type="radio" id="radio-3" name="tabs">
            <label class="tab" for="radio-3">E-Ticket Portal </label>
            <span class="glider"></span>
        </div>
    </div>
</header>

<section class="content">
    <div class="details shadow">
        <div class="details__item">
            <div class="item__details">
                <div class="item__title">
                    <?php echo $data_row['departure'] ?> to
                    <?php echo $data_row['arrival'] ?> -
                    <?php echo $data_row['flight_ID']?>
                </div>
                <div class="item__price">
                    Rs <?php echo $data_row['price'] ?> /=
                </div>
                <div class="item__quantity">
                    <img id="img_grant" src="../../src/grant.png" alt="access_seal">
                </div>
                <div class="item__description">
                    <ul style="none">
                        <li><b>Departing From :</b><?php echo $data_row['departure'] ?></li>
                        <li><b>Arrive To : </b><?php echo $data_row['arrival'] ?></li>
                        <li><b>Departing Time : </b><?php echo $data_row['departure_time'] ?></li>
                        <li><b>Arrival Time : </b><?php echo $data_row['arrival_time'] ?></li>
                        <li><b>Air-Line Name : </b><?php echo $data_row['airline'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="payment">
            <div class="payment__title">
                Payment Method
            </div>
            <div class="payment__types">
                <div class="payment__type active">
                    Visa</div>
                <div class="payment__type">
                    Master Card</div>
            </div>

            <div class="payment__info">
                <div class="payment__cc">
                    <div class="payment__title">
                        <i class="icon icon-user"></i>Personal Information
                    </div>
                    <form action="validation_and_fetching.php" method="post">
                        <div class="form__cc">
                            <div class="row">
                                <div class="field">
                                    <div class="title">Credit Card Number</div>
                                    <input type="text" class="input txt text-validated" name="card_num" placeholder="4542 9931 9292 2293" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="field small">
                                    <div class="title">Expiry Date</div>
                                    <select class="input ddl" name="expiry_month">
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>

                                    <select class="input ddl" name="expiry_year">
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                    </select>

                                </div>
                                <div class="field small">
                                    <div class="title">CVV Code <span class="numberCircle">?</span></div>
                                    <input type="text" class="input txt" name="cvv_code" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="field">
                                    <div class="title">Name on Card</div>
                                    <input type="text" class="input txt" name="name_on_card" />
                                </div>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="payment__shipping">
                    <div class="payment__title">
                        <i class="icon icon-plane"></i> Ticket Holder Information
                    </div>
                    <div class="details__user">
                        <div class="user__name"><?php echo $name?>
                            <br><?php echo $currentDate?></div>
                        <div class="user__address">Ticket Vending Address:<br> <?php echo $address ?>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="actions">

            <a href="#" class="btn action__submit">Process the Payment
                <i class="icon icon-arrow-right-circle"></i>
            </a>
            <a href="#" class="backBtn">Go Back to Submit details page</a>

        </div>
</section>
<script src="payment.js"></script>
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
