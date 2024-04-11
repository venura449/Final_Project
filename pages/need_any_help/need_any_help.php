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
    <link rel="stylesheet" href="need_any_help.css">

</head>
<body>
<div class="login" id="login">
    <form action="" class="login__form">
        <h2 class="login__title">Need Any Help ?</h2>

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
                <label for="Message" class="login__label">Message</label>
                <textarea
                    id="password"
                    class="login__input"
                    placeholder="Enter Your Message"
                ></textarea>
            </div>
        </div>

        <div>
            <p class="login__signup">
                Need To Contact Us ? <a href="#"> Contact Us</a>
            </p>

            <button type="submit" class="login__button">Send Inquire</button>
        </div>
    </form>

</div>

<!--Background Image-->
<main class="main">
    <img src="../../src/Capture.JPG" alt="image" class="main__bg"/>
</main>
</body>

</html>
