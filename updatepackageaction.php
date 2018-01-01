<?php
$packid=$_POST['packid'];
$price=$_POST['price'];
include('dataconnection.php');
$sql="update package set Packprice='$price' where Packid='$packid'";
mysqli_query($con,$sql);
header("Location:category-admin.php");

?>