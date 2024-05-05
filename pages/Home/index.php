<?php
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';
// Include the HTML content
require_once("../../Components/Header/header.php");
// Include the CSS file
require_once ("../../Components/Animation/animation.php");
require_once ("../../php/dbconnection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
            href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="Home.css" />
    <title>WIX-Air | Home</title>

</head>
<body>

<header data-aos="fade-left" class="section__container header__container">
    <h1 class="section__header">Find And Book<br />A Great Experience</h1>
    <img src="../../src/flight.jpg" alt="header" />
</header>

<section id="search" data-aos="fade-right" class="section__container booking__container">
    <div class="booking__nav">
        <span class="booking">Economy Class</span>
        <span class="booking">Business Class</span>
        <span class="booking">First Class</span>
    </div>
    <form action="#search" method="post" id="form1">
        <div class="form__group">
            <span><i class="ri-map-pin-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <input name="source" type="text" />
                    <label>Depart From</label>
                </div>
                <p>What is Your hometown?</p>
            </div>
        </div>
        <div class="form__group">
            <span><i class="ri-user-3-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <input name="destination" type="text" />
                    <label>Arrive To</label>
                </div>
                <p>Where Are you going?</p>
            </div>
        </div>
        <div class="form__group">
            <span><i class="ri-calendar-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <input name="date1" type="date" />
                    <label>Departure</label>
                </div>
                <p>Add date</p>
            </div>
        </div>
        <div class="form__group">
            <span><i class="ri-calendar-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <input name="date2" type="date" />
                    <label >Return</label>
                </div>
                <p>Add date</p>
            </div>
        </div>
        <input hidden="hidden" name="trip_class" id="trip_class"/>
        <button class="btn"  type="submit" name="submit"><i class="ri-search-line"></i></button>
    </form>
    <?php

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $source = $_POST['source'];
        $destination = $_POST['destination'];
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];

        $_SESSION['trip_class'] = $_POST['trip_class'];

        // Prepare basic SQL statement
        $sql = "SELECT * FROM flights WHERE `departure`='$source' AND `arrival`='$destination'";

        // Add conditions based on provided dates
        if (!empty($date1)) {
            $sql .= " AND DATE(departure_time) = '$date1'";
        }
        if (!empty($date2)) {
            // For one-way trips, only consider the departure date
            $sql .= " AND DATE(departure_time) BETWEEN '$date1' AND '$date1'";
        }

        // Execute query
        $result = mysqli_query($conn, $sql);

        // Check for errors
        if (!$result) {
            echo "Error executing query: " . mysqli_error($conn);
        } else {
            // Check if there are any results
            if (mysqli_num_rows($result) > 0) {
                // Display flight search results in a table
                echo '<table border="1">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Air-Line</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Booking State</th>
                    </tr>
                </thead>
                <tbody>';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                    <td>'.$row['departure'].'</td>
                    <td>'.$row['arrival'].'</td>
                    <td>'.$row['airline'].'</td>
                    <td>'.$row['departure_time'].'</td>
                    <td>'.$row['arrival_time'].'</td>
                    <td><a id="book" href="../submit_details/submit_details.php?flightid='.$row['flight_ID'].'">Book now</a></td>
                </tr>';
                }

                echo '</tbody></table>';
            } else {
                echo "No flights found for the selected criteria.";
            }
        }

        // Close connection
        mysqli_close($conn);
    }
    ?>
</section>

<!-- The rest of your HTML code follows... -->


<section class="section__container plan__container">
    <p data-aos="fade-right" class="subheader">TRAVEL SUPPORT</p>
    <h2 data-aos="fade-right" class="section__header">Plan your travel with confidence</h2>
    <p data-aos="fade-right" class="description">
        Find help with your bookings and travel plans, and see what to expect
        along your journey.
    </p>
    <div data-aos="fade-right" class="plan__grid">
        <div data-aos="fade-right" class="plan__content">
            <span class="number">01</span>
            <h4>Travel Requirements for Dubai</h4>
            <p>
                Stay informed and prepared for your trip to Dubai with essential
                travel requirements, ensuring a smooth and hassle-free experience in
                this vibrant and captivating city.
            </p>
            <span class="number">02</span>
            <h4>Multi-risk travel insurance</h4>
            <p>
                Comprehensive protection for your peace of mind, covering a range of
                potential travel risks and unexpected situations.
            </p>
            <span class="number">03</span>
            <h4>Travel Requirements by destinations</h4>
            <p>
                Stay informed and plan your trip with ease, as we provide up-to-date
                information on travel requirements specific to your desired
                destinations.
            </p>
        </div>
        <div data-aos="fade" class="plan__image">
            <img src="../../src/plan-1.jpg" alt="plan" />
            <img src="../../src/plan-2.jpg" alt="plan" />
            <img src="../../src/plan-3.jpg" alt="plan" />
        </div>
    </div>
</section>

<section data-aos="fade-right" class="memories">
    <div class="section__container memories__container">
        <div class="memories__header">
            <h2 class="section__header">
                Travel to make memories all around the world
            </h2>
            <button class="view__all">View All</button>
        </div>
        <div class="memories__grid">
            <div class="memories__card">
                <span><i class="ri-calendar-2-line"></i></span>
                <h4>Book & relax</h4>
                <p>
                    With "Book and Relax," you can sit back, unwind, and enjoy the
                    journey while we take care of everything else.
                </p>
            </div>
            <div class="memories__card">
                <span><i class="ri-shield-check-line"></i></span>
                <h4>Smart Checklist</h4>
                <p>
                    Introducing Smart Checklist with us, the innovative solution
                    revolutionizing the way you travel with our airline.
                </p>
            </div>
            <div class="memories__card">
                <span><i class="ri-bookmark-2-line"></i></span>
                <h4>Save More</h4>
                <p>
                    From discounted ticket prices to exclusive promotions and deals,
                    we prioritize affordability without compromising on quality.
                </p>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-right" class="section__container lounge__container">
    <div class="lounge__image">
        <img src="../../src/lounge-1.jpg" alt="lounge" />
        <img src="../../src/lounge-2.jpg" alt="lounge" />
    </div>
    <div class="lounge__content">
        <h2 class="section__header">Unaccompanied Minor Lounge</h2>
        <div class="lounge__grid">
            <div class="lounge__details">
                <h4>Experience Tranquility</h4>
                <p>
                    Serenity Haven offers a tranquil escape, featuring comfortable
                    seating, calming ambiance, and attentive service.
                </p>
            </div>
            <div class="lounge__details">
                <h4>Elevate Your Experience</h4>
                <p>
                    Designed for discerning travelers, this exclusive lounge offers
                    premium amenities, assistance, and private workspaces.
                </p>
            </div>
            <div class="lounge__details">
                <h4>A Welcoming Space</h4>
                <p>
                    Creating a family-friendly atmosphere, The Family Zone is the
                    perfect haven for parents and children.
                </p>
            </div>
            <div class="lounge__details">
                <h4>A Culinary Delight</h4>
                <p>
                    Immerse yourself in a world of flavors, offering international
                    cuisines, gourmet dishes, and carefully curated beverages.
                </p>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-right" class="section__container travellers__container">
    <h2 class="section__header">Best travellers of the month</h2>
    <div class="travellers__grid">
        <div class="travellers__card">
            <img src="../../src/traveller-1.jpg" alt="traveller" />
            <div class="travellers__card__content">
                <img src="../../src/client-1.jpg" alt="client" />
                <h4>Emily Johnson</h4>
                <p>Dubai</p>
            </div>
        </div>
        <div class="travellers__card">
            <img src="../../src/traveller-2.jpg" alt="traveller" />
            <div class="travellers__card__content">
                <img src="../../src/client-2.jpg" alt="client" />
                <h4>David Smith</h4>
                <p>Paris</p>
            </div>
        </div>
        <div class="travellers__card">
            <img src="../../src/traveller-3.jpg" alt="traveller" />
            <div class="travellers__card__content">
                <img src="../../src/client-3.jpg" alt="client" />
                <h4>Olivia Brown</h4>
                <p>Singapore</p>
            </div>
        </div>
        <div class="travellers__card">
            <img src="../../src/traveller-4.jpg" alt="traveller" />
            <div class="travellers__card__content">
                <img src="../../src/client-4.jpg" alt="client" />
                <h4>Daniel Taylor</h4>
                <p>Malaysia</p>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-right" class="subscribe">
    <div class="section__container subscribe__container">
        <h2 class="section__header">Subscribe newsletter & get latest news</h2>
        <form class="subscribe__form" action="subshandler.php" method="post">
            <input type="text" name="mail" placeholder="Enter your email here" />
            <button class="btn" type="submit">Subscribe</button>
        </form>
    </div>
</section>
<script src="Home.js"></script>

</body>
<?php
// Include the HTML content
require_once("../../Components/Footer/Footer.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';

?>
</html>