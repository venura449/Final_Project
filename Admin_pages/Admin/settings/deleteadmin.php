<?php

require_once ("../../../php/dbconnection.php");
$_admin_id = $_GET['adminid'];
$sql1="DELETE FROM `manager` WHERE admin_id";
$result1=mysqli_query($conn,$sql1);

$sql = "DELETE FROM `admin` WHERE admin_id = $_admin_id";
$result = mysqli_query($conn,$sql);
if($result && $result1){
    header("Location:settings.php");
}
else{
    $_SESSION['admin_error']="Deleting Failed";
    header("Location:settings.php");
}