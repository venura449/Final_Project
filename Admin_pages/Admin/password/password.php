<?php
echo'<html>';
require_once('../Components/Sidebar.php');
echo '</html>';

echo '<style>';
require_once('../Components/sidebar.css');
echo '</style>';

echo '<script>';
require_once('../Components/sidebar.js');
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Wix Air</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="password.css">
</head>

<body>
<div class="container123">

    <div class="left">
        <h2>Change Admin Password</h2>
        <form>
            <br>
            <label> Email</label><br>
            <label>
                <input type="text"/>
                <br>

            </label>

            <label>Password</label><br>
            <label>
                <input type="text"/>
                <br>
            </label>

            <label>Confirm Password</label><br>
            <label>
                <input type="text">
                <br>
            </label>
            <button>Add</button>
        </form>

    </div>

    <div class="right">
        <h2>Current Admins</h2>
        <?php
        $sql = "SELECT * FROM `admin` ORDER BY `admin_id` DESC ";


        $result = mysqli_query($conn, $sql);

        echo '<table id="Flighttable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>State</th>
                       
                    </tr>
                    </thead>
                    <tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td><span id="del"><button id="row_btn" onclick=deleteflight('.$row['admin_id'].')><ion-icon style="color:black" name="trash-outline"></button></ion-icon></span></td>
                       
                    </tr>';

        }

        echo '</tbody></table>';
        ?>
    </div>
</div>
</body>
</html>
