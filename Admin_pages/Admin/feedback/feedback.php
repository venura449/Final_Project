<?php
require_once("../../../php/dbconnection.php");
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin-Wix Air</title>
        <script src="feedback.js"></script>
        <link rel="stylesheet" href="feedback.css">
    </head>
    <body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../Admin.php">
                    <span class="icon">
                        <ion-icon name="airplane-outline"></ion-icon>
                    </span>
                        <span class="title">Wix-Air</span>
                    </a>
                </li>
                <li>
                    <a href="../Admin.php">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="../Customers/Customers.php">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="../Flights/flight.php">
                    <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </span>
                        <span class="title">Flights</span>
                    </a>
                </li>
                <li>
                    <a href="../feedback/feedback.php">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                        <span class="title">Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="../settings/settings.php">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="../password/password.php">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="../Signout/signout.php">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
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
            <div class="details">
                <div class="recentflights">
                    <div class="cardHeader">
                        <h2>Recent Feedback</h2>
                    </div>
                    <div id="filter_tab_div">
                        <div>
                            <div class="input1">
                                <label>Filter by Date posted</label>
                            </div>
                            <input id="Des" type="text" placeholder="Date posted">
                        </div>
                        <div>
                            <div class="input">
                                <label>Filter by Name</label>
                            </div>
                            <input id="Des2" type="text" placeholder="Name">
                        </div>
                        <div>
                            <div class="input">
                                <label>Filter by Email</label>
                            </div>
                            <input id="Des3" type="text" placeholder="Email">
                        </div>
                        <div>
                            <div class="input">
                                <label>Filter by Question</label>
                            </div>
                            <input id="Des4" type="text" placeholder="Question">
                        </div>
                        <div>
                            <div class="input">
                                <label>Filter by Reply</label>
                            </div>
                            <input id="Des5"type="text" placeholder="Reply">
                        </div>
                        <div>
                            <button id="fil_btn" onclick="filterTable()"><span><ion-icon name="file-tray-full"></ion-icon></span><span>Filter</span></button>
                        </div>
                    </div>
                    <?php
                    $sql = "SELECT f.*, u.username, u.email,u.name 
                        FROM feedback f 
                        JOIN registered_user u ON f.user_id = u.user_id 
                        ORDER BY f.post_date DESC";
                    $result = mysqli_query($conn, $sql);

                    echo '<table id="FeedbackTable">
    <thead>
        <tr>
            <th>Date Post</th>
            <th>Email</th>
            <th>Question</th>
            <th>Reply</th>
            <th>State</th>
        </tr>
    </thead>
    <tbody>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
        <td>' . $row['post_date'] . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['question'] . '</td>
        <td>' . $row['reply'] . '</td>
        <td>
            <span id="del">
                <button id="row_btn" onclick="deleteFeedback(' . $row['feedback_id'] . ')">
                    <ion-icon style="color:black" name="trash-outline"></ion-icon>
                </button>
            </span>
            <span id="upd">
                <button id="row_btn" onclick="AddReply(' . $row['feedback_id'] . ')">
                <ion-icon style="color:black;" name="arrow-up-circle"></ion-icon>
                </button>
            </span>
        </td>
    </tr>';
                    }

                    echo '</tbody></table>';
                    ?>
                    <script>
                        function deleteFeedback(f_Id) {
                            var confirmDelete = confirm("Are you sure you want to delete this Feedback?");
                            if(confirmDelete){
                                window.location.href = "handlers/deletefeedback.php?f_id="+f_Id;
                            }
                        }

                        function AddReply(f_id) {
                            const message = document.getElementById("reply_msg");
                            const f_id_holder = document.getElementById("reply_msg_id");
                            const form1 = document.getElementById("form_sec");
                            message.value = prompt("Enter the Reply for the Question");
                            f_id_holder.value = f_id;
                            form1.submit();
                        }

                    </script>
                    <form action="handlers/addfeedback.php" id="form_sec" method="post">
                        <input name="message" type="text" hidden id="reply_msg">
                        <input name="f_id" type="text" hidden id="reply_msg_id">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="feedback.js "></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
<?php
