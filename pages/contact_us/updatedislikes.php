
<?php
require_once("../../php/dbconnection.php");
session_start();


if (isset($_POST['question_id'])) {
    $q_id = $_POST['question_id'];
}

$sql = "UPDATE `inquire` SET `dislikes` = `dislikes` + 1 WHERE `inq_id` = $q_id";

$result = $conn->query($sql);

if ($result) {
    header('Location:contact_us.php');
} else {
    /*add something*/
    header('Location:contact_us.php');
}
?>
