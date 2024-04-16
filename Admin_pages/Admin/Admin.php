<?php
// including database Connection
require_once("../../php/dbconnection.php");
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
    <link rel="stylesheet" href="admin.css">
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
                <a href="#">
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
                <a href="Adminsubdocs/Flights/flight.php">
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

        <!-- ======================= Cards ================== -->
        <div class="cardBox">

        <!--this part renders the first card (count of users)-->
            <div class="card">
                <div>
                    <?php
                    // Part to update number of users
                    $sql = "SELECT * FROM `users` ";
                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);
                    echo '<div id="count" class="numbers">' . $count . '</div>';
                    ?>
                    <div class="cardName">Total Users</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <?php
                    // Part to update number of flights
                    $sql = "SELECT * FROM `flight` ";
                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);
                    echo '<div id="count" class="numbers">' . $count . '</div>';
                    ?>
                    <div class="cardName">Registerd Flights</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="airplane"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <?php
                    // Part to update number of Feedback
                    $sql = "SELECT * FROM `feedback` ";
                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);
                    echo '<div id="count" class="numbers">' . $count . '</div>';
                    ?>
                    <div class="cardName"> Comments </div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <?php
                    // Part to update number of Feedback
                    $sql = "SELECT `cost` FROM `ticket` ;";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $count+=$row['cost'];
                    }
                    echo '<div id="count" class="numbers"><span style="font-size: 23px;">Rs</span> ' . $count .'</div>';
                    ?>
                    <div class="cardName">Earning</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div>
        </div>

        <!-- ================ Flights Details List ================= -->
        <div class="details">
            <div class="recentflights">
                <div class="cardHeader">
                    <h2>Recent Flights</h2>
                    <a href="Adminsubdocs/Flights/flight.php" class="btn">View All</a>
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
                        <button id="fil_btn" onclick="filterTable()">Filter</button>
                    </div>
                </div>
<?php
                $sql = "SELECT * FROM `flight` ORDER BY `departure` DESC ";


                $result = mysqli_query($conn, $sql);

                    echo '<table id="Flighttable">
                    <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
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
                        <td><span class="status inProgress">In Progress</span></td>
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
<script src="Admin.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
