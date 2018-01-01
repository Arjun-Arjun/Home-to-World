<?php
$sno=$_GET['slno'];
include('dataconnection.php');
$sql="delete from bookings where slno='$sno';";
mysqli_query($con,$sql);
header("Location:bookings.php");
?>