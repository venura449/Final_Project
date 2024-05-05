<?php
require_once ("../../php/dbconnection.php");
if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
}

$sql = "INSERT INTO `subscribe`(`email`) VALUES ('$mail')";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location:index.php");
}

?>
