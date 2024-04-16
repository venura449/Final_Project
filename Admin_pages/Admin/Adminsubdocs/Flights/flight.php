<?php
// including database Connection
require_once("../../../../php/dbconnection.php");
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
        <link rel="stylesheet" href="flight.css">
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
                    <a href="#">
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
                        <h2>Recent Flights</h2>
                        <a href="AddFlights/addflights.php" class="btn"><span id="plus_ico"><ion-icon name="add-circle"></ion-icon></span></span><span id="btn_text">Add Flights</span></span></a>
                    </div>

                    <div id="filter_tab_div">
                        <div>
                            <div class="input1">
                                <label>Filter by Destination</label>
                            </div>
                            <input id="Des" type="text" placeholder="Destination">
                        </div>

                        <div>
                            <div class="input">
                                <label>Filter by Source</label>
                            </div>
                            <input id="Des2" type="text" placeholder="Source">
                        </div>

                        <div>
                            <div class="input">
                                <label>Filter by Airline</label>
                            </div>
                            <input id="Des3" type="text" placeholder="Airline">
                        </div>

                        <div>
                            <div class="input">
                                <label>Filter by Departing date</label>
                            </div>
                            <input id="Des4" type="text" placeholder="Depart Date">
                        </div>

                        <div>
                            <div class="input">
                                <label>Filter by Arrival Date</label>
                            </div>
                            <input id="Des5"type="text" placeholder="Arrive Date">
                        </div>
                        <div>
                            <button id="fil_btn" onclick="filterTable()"><span><ion-icon name="file-tray-full"></ion-icon></span><span>Filter</span></button>
                        </div>
                    </div>
                    <?php
                    $sql = "SELECT * FROM `flight` ORDER BY `departure` DESC ";


                    $result = mysqli_query($conn, $sql);

                    echo '<table id="Flighttable">
                    <thead>
                    <tr>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Air-Line</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                    </tr>
                    </thead>
                    <tbody>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                        <td>' . $row['source'] . '</td>
                        <td>' . $row['Destination'] . '</td>
                        <td>' . $row['airline'] . '</td>
                        <td>' . $row['departure'] . '</td>
                        <td>' . $row['arrivale'] . '</td>
                        <td><span id="del"><button id="row_btn" onclick=deleteflight('.$row['flight_id'].')><ion-icon style="color:black" name="trash-outline"></button></ion-icon></span><span id="upd"><ion-icon style="color:black" name="arrow-up-circle"></ion-icon></span></td>
                    </tr>';
                    }

                    echo '</tbody></table>';
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="flight.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
<?php
