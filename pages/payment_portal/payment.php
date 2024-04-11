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
        <link rel="stylesheet" href="payment.css">
        <title>Payment</title>

    </head>
    <body>
    <header>

        <div class="container">
            <div class="notification">
                Just One Step Ahead From Your Tour
            </div>
        </div>

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
        <div class="discount"></div>

        <div class="container">
            <div class="payment">
                <div class="payment__title">
                    Payment Method
                </div>
                <div class="payment__types">
                    <div class="payment__type payment__type--cc active">
                        <i class="icon icon-credit-card"></i>Visa</div>
                    <div class="payment__type payment__type--paypal">
                        <i class="icon icon-paypal"></i>Master Card</div>

                </div>

                <div class="payment__info">
                    <div class="payment__cc">
                        <div class="payment__title">
                            <i class="icon icon-user"></i>Personal Information
                        </div>
                        <form>
                            <div class="form__cc">
                                <div class="row">
                                    <div class="field">
                                        <div class="title">Credit Card Number
                                        </div>
                                        <input type="text" class="input txt text-validated" placeholder="4542 9931 9292 2293" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="field small">
                                        <div class="title">Expiry Date
                                        </div>
                                        <select class="input ddl">
                                            <option selected>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                        <select class="input ddl">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option selected>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                        </select>
                                    </div>
                                    <div class="field small">
                                        <div class="title">CVV Code
                                            <span class="numberCircle">?</span>
                                        </div>
                                        <input type="text" class="input txt" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="field">
                                        <div class="title">Name on Card
                                        </div>
                                        <input type="text" class="input txt" />
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="payment__shipping">
                        <div class="payment__title">
                            <i class="icon icon-plane"></i> Ticket Holder Information
                        </div>
                        <div class="details__user">
                            <div class="user__name">John Doe
                                <br> 13/03/1980</div>
                            <div class="user__address">Shipping Address: 22 Street, Address
                                <br>Country</div>
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
