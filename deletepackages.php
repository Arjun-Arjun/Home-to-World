<?php
$packid=$_GET['packid'];
include('dataconnection.php');
$sql="delete from package where Packid='$packid';";
mysqli_query($con,$sql);
header("Location:category-admin.php");
?>