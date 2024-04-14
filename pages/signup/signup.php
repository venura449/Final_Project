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
        <link rel="stylesheet" href="signup.css">

    </head>
    <body>
    <!--login container Section-->
    <div class="login" id="login">
        <div>
            <a href="../Home/index.php"> <img class="login__close" src="../../src/close.png"></a>
        </div>
        <form action="" class="login__form">
            <h2 class="login__title">Register Your Account</h2>

            <div class="login__group">
                <div>
                    <label for="username" class="login__label">Username</label>
                    <input
                        type="text"
                        placeholder="Write your Username"
                        id="username"
                        class="login__input"
                    />
                </div>

                <div>
                    <label for="email" class="login__label">Email</label>
                    <input
                        type="email"
                        placeholder="Enter your Email"
                        id="email"
                        class="login__input"
                    />
                </div>

                <div>
                    <label for="password" class="login__label">Password</label>
                    <input
                        type="password"
                        placeholder="Enter your password"
                        id="password"
                        class="login__input"
                    />
                </div>


            </div>

            <div>
                <p class="login__signup">Already Have An Account
                     <a href="../../pages/signin/signin.php"> Sign In</a>
                </p>
                <input
                    for="declear"
                    name="check"
                    type="checkbox"
                    class="login__forgot"
                /> I Agree to <a href="#" >Terms and Conditions</a>
                   <p class="login__forgot"><a href="#">Privacy Policy</a></p>

                <button type="submit" class="login__button">Sign Up</button>
            </div>
        </form>


    </div>

    <!--Background Image-->
    <main class="main">
        <img src="../../src/Capture.JPG" alt="image" class="main__bg"/>
    </main>
    </body>

    </html>
<?php
