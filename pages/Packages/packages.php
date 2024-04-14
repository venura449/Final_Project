<?php

// Include the HTML content
require_once("../../Components/Header/header.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';
?>

<!DOCTYPE html>
<html lang="en"'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="packages.css">
    <title>Payment</title>

</head>
<body>
<section class="container">
    <h1>Check Out Our New Travel Locations</h1>
    <div class="sliderwrapper">
        <div class="slider">
            <img id="1" src="../../src/paris.jpg" alt="paris">
            <img id="2" src="../../src/can.jpeg" alt="paris">
            <img id="3" src="../../src/canda.webp" alt="paris">
            <img id="4" src="../../src/naya.jpg" alt="paris">
            <img id="5" src="../../src/paris.jpg" alt="paris">
            <img id="6" src="../../src/rt.jpg" alt="paris">
            <img id="7" src="../../src/sydny.webp" alt="paris">
        </div>
        <div class="slidernav">
            <a href="#1"></a>
            <a href="#2"></a>
            <a href="#3"></a>
            <a href="#4"></a>
            <a href="#5"></a>
            <a href="#6"></a>
            <a href="#7"></a>
        </div>
    </div>

</section>
<section class="secondsection">
    <div>
        <h2>What is the Package Section ?</h2>
        <p>
            Wix-Air prides itself on providing a diverse range of discounted travel packages tailored to
            suit every traveler's desires. Within this section, you'll find an extensive selection of flights
            to various destinations worldwide, each offering the opportunity to explore iconic landmarks and hidden
            gems alike.

            From bustling cityscapes to serene landscapes, our packages cover a wide array of destinations, ensuring
            there's something for everyone. Our commitment to affordability means that these discounted offerings make
            travel accessible to all, allowing you to embark on your next adventure without breaking the bank.
        </p>
    </div>
</section>

<section>
    <div class="container">
        <h1>Latest Offer Packages</h1>
        <div class="card__container">
            <article class="card__article">
                <img src="../../src/fr.jpg" alt="image" class="card__img">

                <div class="card__data">
                    <span class="card__description">Great place to visit in summer</span>
                    <h2 class="card__title">Bali,Indonesia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> Rs 750,000</b></h2>
                    <a href="#" class="card__button">Read More</a>
                </div>
            </article>

            <article class="card__article">
                <img src="../../src/ku.jpg" alt="image" class="card__img">

                <div class="card__data">
                    <span class="card__description">Heritage of ancient civilizations</span>
                    <h2 class="card__title">Colosseum,Rome &nbsp;<b>Rs 1,050,000</b></h2>
                    <a href="#" class="card__button">Read More</a>
                </div>
            </article>

            <article class="card__article">
                <img src="../../src/gh.jpg" alt="image" class="card__img">

                <div class="card__data">
                    <span class="card__description">Perl of Sand</span>
                    <h2 class="card__title">Dubai,Saudi Arabia &nbsp;<b>Rs 2,050,000</h2>
                    <a href="#" class="card__button">Read More</a>
                </div>
            </article>
        </div>
    </div>
</section>
<section class="third">

</section>
<script src="package.js"></script>
</body>


<?php
// Include the HTML content
require_once("../../Components/Footer/Footer.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';
?>

