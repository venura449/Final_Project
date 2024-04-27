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

//fetching error handling variable
if(isset($_SESSION['admin_error'])){
    $admin_error = $_SESSION['admin_error'];
    unset($_SESSION['admin_error']);
}
else{
    $admin_error="";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Wix Air</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="settings.css">
</head>

<body>
<div class="container123">

    <div class="left">
        <h2>Add New Admin</h2>
        <form action="settingshandler.php" method="post" onsubmit="return validInput()" id="myform">
            <br>
            <div id="alertmsg">

            </div>

            <!--this for Error message for displaying carrying error message-->
            <script>
                function checkcred() {
                    var loginFail = "<?php echo $admin_error ?>";
                    var alertmsg = document.getElementById("alertmsg");
                    if (loginFail !== '') {
                        alertmsg.style.display = 'block';
                        alertmsg.innerHTML = loginFail;
                    }
                }
                document.addEventListener('DOMContentLoaded', function() {
                    checkcred();
                });
            </script>

            <label> Name</label><br>
            <label>
                <input type="text" name="name" id="name"/>
                <br>

            </label>

            <label>Age</label><br>
            <label>
                <input type="text" name="age" id="age"/>
                <br>
            </label>

            <label>Email</label><br>
            <label>
                <input type="text" name="email" id="email">
                <br>
            </label>

            <label>Password</label><br>
            <label>
                <input type="text" name="password" id="password">
                <br>
            </label>
            <button type="submit" id="submit_btn" >Add</button>
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
                        <td><span id="del"><button id="row_btn" onclick="deleteAdmin(' . $row['admin_id'] . ')"><ion-icon style="color:black" name="trash-outline"></button></ion-icon></span></td>
                    </tr>';

        }

        echo '</tbody></table>';
        ?>
    </div>
</div>
<script src="settings.js"></script>
</body>
</html>
