<html>
<body>
<?php
session_start();
if($_SESSION['valid']!='T')
	{
		include('login-check.php');
	}
$id=$_SESSION['id'];
$slno=$_POST['psno'];
$category=$_POST['pcategory'];
$subcategory=$_POST['psubcategory'];
$price=$_POST['pprice'];
$package=$_POST['ppackage'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
include('dataconnection.php');
$sql="insert into journey(id,name,email,dob,gender,phno,age,address,category,subcategory,price,package) values('$id','$name','$email','$dob','$gender','$mobile','$age','$address','$category','$subcategory','$price','$package')";

mysqli_query($con,$sql);
?>
<script type="text/javascript">
	alert("payment completed");
</script>
<?php

header("Location:viewbookings.php");

?>
</body>
</html>