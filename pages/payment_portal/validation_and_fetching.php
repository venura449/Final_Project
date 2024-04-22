<?php
// Establish database connection
require_once("../../php/dbconnection.php");
session_start();

// Check if all required session variables are set
if(isset($_SESSION['user_id'], $_SESSION['seatnum'], $_SESSION['lugnum'], $_SESSION['lugnumadd'], $_SESSION['name'], $_SESSION['age'], $_SESSION['address'], $_SESSION['contact'], $_SESSION['passport'], $_SESSION['f_id'], $_SESSION['trip_class'], $_SESSION['price'])) {
    // Assign values to variables
    $user_id = $_SESSION['user_id'];
    $seat_num = $_SESSION['seatnum'];
    $lug_num = $_SESSION['lugnum'];
    $lug_num_add = $_SESSION['lugnumadd'];
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];
    $address = $_SESSION['address'];
    $contact_num = $_SESSION['contact'];
    $passport_num = $_SESSION['passport'];
    $flight_id = $_SESSION['f_id'];
    $trip_class = $_SESSION['trip_class'];
    $price = $_SESSION['price'];

    // Retrieve payment details from POST variables
    $card_num = $_POST['card_num'];
    $expiry_month = $_POST['expiry_month'];
    $expiry_year = $_POST['expiry_year'];
    $cvv_code = $_POST['cvv_code'];
    $name_on_card = $_POST['name_on_card'];

    // Validate payment
    $sql = "SELECT * FROM `validation` WHERE card_number = '$card_num'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        // Get the current date with only month and year included
        $current_date = date('Y-m'); // Year-Month format

        // Construct the expiry date with only month and year included
        $exp_date = $expiry_year . '-' . $expiry_month; // Year-Month format

        // Validate expiry date and CVV
        if ($exp_date > $current_date && $cvv_code == $data['CVV']) {
            echo "Card validated";

            // Calculate total luggage
            $total_lug = $lug_num_add + $lug_num;

            // Insert reservation data into database
            $sql = "INSERT INTO `reservation`(`user_id`, `flight_id`, `name`, `address`, `contact`, `passport`, `class`, `seat_no`, `price`, `Luggage`)
                    VALUES ('$user_id','$flight_id','$name','$address','$contact_num','$passport_num','$trip_class','$seat_num','$price','$total_lug')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Reservation successfully added.";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Card validation or CVV verification failed.";
        }
    } else {
        echo "Card validation failed.";
    }
} else {
    echo "One or more required SESSION variables are not set.";
}



// Insert seat booking data into database
$sql1 = "INSERT INTO `seats`( `flight_id`, `user_id`, `seat_number`, `is_booked`) 
                    VALUES ('$flight_id','$user_id','$seat_num','1')";
$result1 = mysqli_query($conn, $sql1);
if ($result) {

} else {
    echo "Error: " . mysqli_error($conn);
}

if($result && $result1){
    header("Location:../my_bookings/mybookings.php");
}
?>

