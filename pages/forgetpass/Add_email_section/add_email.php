<?php
// Include database connection script
require_once('../../../php/dbconnection.php');

session_start();


if (isset($_SESSION['user']) && ($_SESSION['user'] === "false")) {
    echo '<script>

    document.addEventListener("DOMContentLoaded", function () {
        
    console.log("user not found");
    let msg = document.getElementById("alertmsg");
    msg.style.display = "block";
    msg.innerHTML = "User Account Not Found";  
    });
    
    </script>';
}
if (isset($_SESSION['user']) && $_SESSION['user'] === "true") {

    $characters = '0123456789';
    $otp_length = 6;
    $otp = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $otp_length; $i++) {
        $otp .= $characters[rand(0, $charactersLength - 1)];
    }

    // Store OTP in session
    $_SESSION['OTP'] = $otp;

    echo '
    <script>
            var loded = false;
            document.addEventListener("DOMContentLoaded", function () {
            document.getElementById(\'otpDiv\').style.display = \'none\';
            document.getElementById(\'email\').value = \''. $_SESSION['verified']. '\';
            loded = true;
        });
        
        /* SmtpJS.com - v3.0.0 */
        var Email = { send: function (a) { return new Promise(function (n, e) { a.nocache = Math.floor(1e6 * Math.random() + 1), a.Action = "Send"; var t = JSON.stringify(a); Email.ajaxPost("https://smtpjs.com/v3/smtpjs.aspx?", t, function (e) { n(e) }) }) }, ajaxPost: function (e, n, t) { var a = Email.createCORSRequest("POST", e); a.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), a.onload = function () { var e = a.responseText; null != t && t(e) }, a.send(n) }, ajax: function (e, n) { var t = Email.createCORSRequest("GET", e); t.onload = function () { var e = t.responseText; null != n && n(e) }, t.send() }, createCORSRequest: function (e, n) { var t = new XMLHttpRequest; return "withCredentials" in t ? t.open(e, n, !0) : "undefined" != typeof XDomainRequest ? (t = new XDomainRequest).open(e, n) : t = null, t } };
        var otp = \'' . $_SESSION['OTP'] . '\'; 
        var email = \'' . $_SESSION['verified'] . '\';
        
        Email.send({
            Host: "smtp.elasticemail.com",
            Username: "venurajayasingha1@gmail.com",
            Password: "51D17D3B04EFC623A7948287E33946A30029",
            To: email,
            From: "venurajayasingha1@gmail.com",
            Subject: "Reset Password Request",
            Body: "Your OTP is: " + otp
        }).then(function(message) {
            console.log("Email sent with OTP: " + otp);
            document.getElementById(\'otpDiv\').style.display = \'block\';
        });
        
        function validateOTP() {
            console.log("Validation started");
            if (1) {
                var enterotp = document.getElementById(\'OTP\').value;
                console.log(otp);
                console.log(enterotp);
                if (enterotp === otp) {
                    console.log("OTP Validated");
                    document.getElementById(\'pass\').style.display = \'block\';
                } else {
                    alert("Invalid OTP");
                }
            }
        }
    
        function validatepassword() {
                console.log("password changing function started");
                var password = document.getElementById(\'password\').value;
                var form = document.getElementById(\'finalform\');
                
                form.submit();
    
                
        }
    </script>';
}

// Unset 'user' session variable
unset($_SESSION['user']);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <!--Link for Icons-->
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
            rel="stylesheet"
        />

        <!--Link for Cascading Style sheet(CSS)-->
        <link rel="stylesheet" href="add_email.css">

    </head>
    <body>
    <!--login container Section-->
    <div class="login" id="login">
        <form action="../forgetpasshandler.php" class="login__form" id="resetForm" method="post">
            <h2 class="login__title">Reset Your Password</h2>

            <div class="login__group">
                <div>
                    <label for="Email" class="login__label">Enter Your Email</label>
                    <input
                            type="email"
                            placeholder="Write your Email"
                            id="email"
                            name="email"
                            class="login__input"
                    />
                    <button id="ffrombtn" type="button" class="login__button1" onclick="validate()">Submit</button>
                </div>

                <!--this div need to fold down-->
                <div id="otpDiv" >
                    <label for="email" class="login__label">OTP</label>
                    <input
                        type="text"
                        placeholder="Enter your OTP"
                        id="OTP"
                        name="OTP"
                        class="login__input"
                    />
                    <p class="login__signup">Didn't Receive a code ?
                        <a href="#">Resend OTP</a>
                        <button type="button" class="login__button1" onclick="validateOTP()">Verify</button>
                </div>
                <div class="thirdone" id="pass" >
                    <label for="newpassword" class="login__label">New Password</label>
                    <input
                        type="password"
                        placeholder="Enter your Password"
                        id="password"
                        class="login__input"
                    />
                    <div>
                        <button type="button" class="login__button_end" onclick="validatepassword()">Change Password</button>
                    </div>
                </div>
                <div id="alertmsg">

                </div>

            </div>


        </form>

        <form action="updatepass.php" method="post" id="finalform">
            <input id="emailhide" hidden="hidden">
        </form>

    </div>

    <!--Background Image-->
    <main class="main">
        <img src="../../../src/Capture.JPG" alt="image" class="main__bg"/>
    </main>
    <script src="add_email.js"></script>
    </body>

    </html>
<?php
