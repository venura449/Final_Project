<?php
session_start();
// Carrying errors using session
if (isset($_SESSION['inq_error'])) {
    $inq_Fail = $_SESSION['inq_error'];
    unset($_SESSION['inq_error']);
} else {
    $inq_Fail = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Need Any Help</title>
    <!-- Link for Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Link for Cascading Style sheet(CSS) -->
    <link rel="stylesheet" href="need_any_help.css">
</head>

<body>
<div class="login" id="login">
    <form action="need_any_help_handler.php" class="login__form" method="post" onsubmit="return validInput()">
        <h2 class="login__title">Need Any Help ?</h2>
        <div class="login__group">
            <div>
                <label for="email" class="login__label">Email</label>
                <input type="email" placeholder="Write your email" id="email" name="email" class="login__input">
            </div>
            <div>
                <label for="Message" class="login__label">Message</label>
                <textarea id="message" class="login__input" name="message" placeholder="Enter Your Message"></textarea>
            </div>
        </div>
        <div>
            <p class="login__signup">Need To Contact Us ? <a href="../contact_us/contact_us.php"> Contact Us</a></p>
            <button type="submit" class="login__button">Send Inquire</button>
        </div>
    </form>
    <!-- Error Handler -->
    <div id="alertmsg"></div>
</div>

<!--error handling part -->
<script>
    window.onload = function() {
        checkcred();
    }

    function checkcred() {
        console.log("Checking credentials");
        var inq_Fail = "<?php echo $inq_Fail ?>";
        console.log(inq_Fail);
        var alertmsg = document.getElementById("alertmsg");
        if (inq_Fail !== '') {
            alertmsg.style.display = "block";
            alertmsg.innerHTML = inq_Fail;
        }
    }

    function validInput() {
        var email = document.getElementById("email").value;
        var alertmsg = document.getElementById("alertmsg");
        var message = document.getElementById("message").value;
        if (email === '' || message === '') {
            alertmsg.style.display = "block";
            alertmsg.innerHTML = "Please Fill out All the Fields";
            return false;
        } else {
            return true;
        }
    }
</script>
<!-- Background Image -->
<main class="main">
    <img src="../../src/Capture.JPG" alt="image" class="main__bg" />
</main>
</body>

</html>
