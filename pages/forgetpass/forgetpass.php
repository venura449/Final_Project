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
    <link rel="stylesheet" href="forgetpass.css">

</head>
<body>
<div class="login" id="login">
    <form action="" class="login__form">
        <h2 class="login__title">Log In</h2>

        <div class="login__group">
            <div>
                <label for="email" class="login__label">Email</label>
                <input
                    type="email"
                    placeholder="Write your email"
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
            <p class="login__signup">
                You do not have an account? <a href="#">Sign up</a>
            </p>

            <a href="#" class="login__forgot"> You forgot your password </a>

            <button type="submit" class="login__button">Log In</button>
        </div>
    </form>

    <i class="ri-close-line login__close" id="login-close"></i>
</div>

<!--Background Image-->
<main class="main">
    <img src="../../src/Capture.JPG" alt="image" class="main__bg" />
</main>
</body>

</html>
