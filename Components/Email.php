
<html lang="en">
<body>
<div style="display:flex">
    <div style="flex:1">

    </div>
    <div style="flex:1">
        <li><div style='text-align: center; padding: 20px;'>
                <h1 style='color: #007bff;'>Reservation Completed</h1>
                <p>Your reservation details:</p>
                <ul style='list-style-type: none; padding: 0;'>
                    <li>Name: " . $row['name'] . "</li>
                    <li>Address: " . $row['address'] . "</li>
                    <li>Contact Number: " . $row['contact'] . "</li>
                    <li>Passport Number: " . $row['passport'] . "</li>
                    <li>Class: " . $row['class'] . "</li>
                    <li>Seat Number: " . $row['seat_no'] . "</li>
                    <li>Price: Rs " . $row['price'] . "</li>
                    <li>Total Luggage: Rs " . $row['Luggage'] . "</li>
                    <li>Total Payment: Rs " . ($row['price'] + $row['Luggage']) . "</li>
                </ul>
            </div></li>
    </div>
</div>
<script>
</script>

</body>
</html>
