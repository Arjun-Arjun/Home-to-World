<html>
<head>
		<title>Bookings</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link href="default.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/w3.css"/>
    	<script src="js/jquery.min.js"></script>
    	<script src="js/bootstrap.js"></script>
    </head>
<body>
<?php
$slno=$_GET['slno'];
session_start();
if($_SESSION['valid']!='T')
	{
		include('login-check.php');
	}
     include('header.php');
     include('dataconnection.php');
     $id=$_SESSION['id'] ;
     $sql="select * from bookings where slno='$slno';";
     $res=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($res);

     ?>

<form action="updatepayee.php" method="POST">
<input type="hidden" name="psno" value="<? echo $slno; ?>" >
<input type="hidden" name="pcategory" value="<? echo $row['category']; ?>" >
<input type="hidden" name="psubcategory" value="<? echo $row['subcategory']; ?>" >
<input type="hidden" name="pprice" value="<? echo $row['price']; ?>" >
<input type="hidden" name="ppackage" value="<? echo $row['package']; ?>" >
<div class="container cols-xs-4 cols-md-4">
<table class="table table-hover">
<caption><font size="10px">Enter passenger details</font></caption>
<tr>
<td>Name </td><td><input type="text" name="name" required></td>
</tr>
<tr>
<td>Gender </td><td><input type="radio" name="gender" value="male">Male&nbsp&nbsp  <input type="radio" value="female" name="gender">FeMale</td>
</tr>
<tr>
<td>Date of Birth </td><td><input type="date" name="dob" required></td>
</tr>
<tr>
<td>Age </td><td><input type="text" name="age" required></td>
</tr>
<tr>
<td>Email id </td><td><input type="email" name="email" required></td>
</tr>
<tr>
<td>Contact No </td><td><input type="text" name="mobile" required></td>
</tr>
<tr>
<td>Address </td><td><textarea cols="22"  name="address"></textarea></td>
</tr>
<tr>
<td colspan="2" align=center><input type="submit" value="Proceed to pay" class="btn btn-success"></td>
</tr>
</table>
</div>
</form>
</body>
</html>