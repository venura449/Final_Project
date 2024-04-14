<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!--Link for Cascading Style sheet(CSS)-->
    <link rel="stylesheet" href="header.css">

</head>
<body>
<!--List section-->
<nav>
    <div class="nav__logo">
        <img id="nav_site_ico" src="../../src/airplane.png" alt="login">
        Wix-Air</div>

    <!--Link section -->
    <ul class="nav__links">
        <li class="link"><a href="../../pages/Home/index.php">Home</a></li>
        <li class="link"><a href="../../pages/Packages/packages.php">Packages</a></li>
        <li class="link"><a href="../../pages/my_bookings/mybookings.php">My Bookings</a></li>
        <li class="link"><a href="../../pages/About_us/About_us.php">About Us</a></li>

    </ul>
    <!--Contact Us button-->
    <button onclick="window.location.href='../../pages/contact_us/contact_us.php'" class="btn12">Contact Us</button>

    <!--Login icon Section-->
    <div class="tooltip">
        <a href="../../pages/signin/signin.php"><img id="nav_login_ico" src="../../src/login.png" alt="login"></a>
        <span class="tool_tip_text">login</span>
    </div>



</nav>

<!--Link for Javascript-->
<script src="header.js"></script>
</body>

</html>
