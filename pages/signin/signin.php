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
    <link rel="stylesheet" href="signin.css">

</head>
<body>
<div class="login" id="login">
    <div>
       <a href="../Home/index.php"> <img class="login__close" src="../../src/close.png"></a>
    </div>
    <form action="" class="login__form">
        <h2 class="login__title">Sign In</h2>

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
                I Don't have an Account <a href="../../pages/signup/signup.php">Sign Up</a>
            </p>

            <a href="../../pages/forgetpass/Add_email_section/add_email.php" class="login__forgot"> forgot your password ? </a>

            <button type="submit" class="login__button">Sign In</button>
        </div>
    </form>

</div>

<!--Background Image-->
<main class="main">
    <img src="../../src/Capture.JPG" alt="image" class="main__bg"/>
</main>
</body>

</html>
