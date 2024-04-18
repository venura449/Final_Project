<?php
// including database Connection
require_once("../../../../../php/dbconnection.php");
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin-Wix Air</title>
        <!-- ======= Styles ====== -->
        <link rel="stylesheet" href="addflights.css">
    </head>

    <body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="airplane-outline"></ion-icon>
                        </span>
                        <span class="title">Wix-Air</span>
                    </a>
                </li>

                <li>
                    <a href="../../Admin.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="../flight.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Flights</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Feedback</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>


            <!-- ================ Flight Details List ================= -->
            <div class="details">
                <div class="recentflights">
                    <div class="cardHeader">
                        <h1>Add Flight Details</h1>
                    </div>
            <div>
                <form action="../addflighthandler/addflighthandler.php" id="flight_form" method="POST">
                    <div id="form_cont">
                        <div id="right_form">
                            <div>
                                <label>Destination :</label>
                                <input name="destination" id="destination" type="text">
                            </div>

                            <div>
                                <label>Source :</label>
                                <input name="source" type="text">
                            </div>

                            <div>
                                <label>Duration(hours) :</label>
                                <input name="duration" type="text">
                            </div>

                            <div>
                                <label>Air-line:</label>
                                <input name="airline" type="text">
                            </div>

                            <div>
                                <label>Departure:</label>
                                <input name="departure" type="datetime-local">
                            </div>
                        </div>

                        <div id="left_form">
                            <div>
                                <label>Arrival :</label>
                                <input  name="arrival" type="datetime-local">
                            </div>

                            <div>
                                <label>Price :</label>
                                <input name="price" type="text">
                            </div>

                            <div>
                                <label>Available Economy Seats :</label>
                                <input name="ecosheet" type="text">
                            </div>

                            <div>
                                <label>Available Business Seats :</label>
                                <input name="bussheet" type="text">
                            </div>

                        </div>
                    </div>
                    <div id="btn-cen">
                       <button id="sub_btn" type="submit" name="submit"><span >Add</span><ion-icon id="logo_add" style="font-size:25px;" tooltip="Add" name="checkmark-circle-outline"></ion-icon></button>
                    </div>


                </form>
            </div>
            </div>
        </div>
    </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="addflights.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
<?php
