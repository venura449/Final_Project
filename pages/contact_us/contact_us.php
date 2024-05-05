<?php
// Include the HTML content
require_once("../../Components/Header/header.php");
require_once ("../../Components/Animation/animation.php");
// Include the CSS file
echo '<style>';
require_once("../../Components/Header/header.css");
echo '</style>';

require_once ("../../php/dbconnection.php");
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WIX-Air||Contact Us</title>
        <link rel="stylesheet" href="contact_us.css">
    </head>
    <body>
    <div data-aos="float-right" class="container123">
        <div class="box1">
            <img alt="help image" src="../../src/cr%20(1).jpg">
        </div>
        <div class="container1">
            <h1>24/7 Contact Center</h1>
            <p><b>Hot Line &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</b>+94 123 456 789</p>
            <p><b>Whats App &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</b>+94 123 456 789</p>
            <p><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</b>wix@gmail.com</p>
            <p><b>Facebook &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</b>wix@facebook.com</p>
        </div>
    </div>
    <a href="../need_any_help/need_any_help.php">
    <div data-aos="fade-right" class="help">
        <img id="help" alt="contact us" src="../../src/helpdesk.gif">
        Need any help
    </div>
    </a>
   <section id="faq">
       <div id="FAQ" data-aos="fade-right" class="container2">
           <h2>Frequently Asked Questions</h2>

           <!-- this for displaying questions-->
           <?php
           $sql = "SELECT * FROM `inquire` ORDER BY `likes` DESC ";
           $result = mysqli_query($conn, $sql);


           while ($row = mysqli_fetch_assoc($result)) {
               echo '<div class="container4">';
               echo '<p>' . $row['question'] . '</p>';
               echo '<div class="comm">';
               echo '<span>' . '&nbsp;' . '</span>';
               echo '<form action="update_likes.php" method="post" style="display: inline;">';
               echo '<input type="hidden" name="question_id" value="' . $row['inq_id'] . '">';
               echo '<button id="mybtn" type="submit" name="like" value="1"><img src="../../src/like.png"></button>' . $row['likes'];
               echo '</form>';
               echo '<form action="updatedislikes.php" method="post" style="display: inline;">';
               echo '<input type="hidden" name="question_id" value="' . $row['inq_id'] . '">';
               echo '<button id="mybtn1" type="submit" name="dislike" value="1"><img src="../../src/dislike.png"></button>' . $row['dislikes'];
               echo '</form>';
               echo '</div>';
               echo '</div>';
           }
           ?>

           <script>

           </script>

       </div>
   </section>
    </body>
    </html>

<?php
// Include the HTML content
require_once("../../Components/Footer/Footer.php");

// Include the CSS file
echo '<style>';
require_once("../../Components/Footer/Footer.css");
echo '</style>';
?>