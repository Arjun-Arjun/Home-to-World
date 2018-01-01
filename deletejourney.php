<?php
$sno=$_GET['bid'];
include('dataconnection.php');
$sql="delete from journey where slno='$sno';";
mysqli_query($con,$sql);
header("Location:viewbookings.php");
?>