<?php


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
        <form action="" class="login__form">
            <h2 class="login__title">Reset Your Password</h2>

            <div class="login__group">
                <div>
                    <label for="Email" class="login__label">Enter Your Email</label>
                    <input
                        type="email"
                        placeholder="Write your Email"
                        id="email"
                        class="login__input"
                    />
                    <button type="submit" class="login__button1">Submit</button>
                </div>

                </p>
                <!--this div need to fold down-->
                <div >
                    <label for="email" class="login__label">OTP</label>
                    <input
                        type="text"
                        placeholder="Enter your OTP"
                        id="OTP"
                        class="login__input"
                    />
                    <p class="login__signup">Didn't Receive a code ?
                        <a href="#">Resend OTP</a>
                        <button type="submit" class="login__button1">Verify</button>
                </div>
                <div >
                    <label for="newpassword" class="login__label">New Password</label>
                    <input
                        type="password"
                        placeholder="Enter your Password"
                        id="password"
                        class="login__input"
                    />
                    <div>
                        <button type="submit" class="login__button_end">Change Password</button>
                    </div>
                </div>

            </div>


        </form>


    </div>

    <!--Background Image-->
    <main class="main">
        <img src="../../../src/Capture.JPG" alt="image" class="main__bg"/>
    </main>
    </body>

    </html>
<?php
