<html>
<head>
<style>
input[type=text],select,textarea{
	width:350px;
}
</style>
</head>
<body>
<?php
session_start(); 
    if($_SESSION['valid']!='A')
	{
		include('admin-check.php');
	}
     include('adminheader.php');
?>
<form action="addpackageaction.php" method="POST" enctype="multipart/form-data"><br><br><br><br>
<table class="table table-hover">
<caption><font size="15px">Enter Details</font></caption>
<tr>
<td>Category</td>
<td><select name="category"><?php
include('dataconnection.php');
$sql11="select * from Category;";
$resultt=mysqli_query($con,$sql11);
while($row=mysqli_fetch_array($resultt))
{
?>
<option value="<?php echo $row['Cat_id']; ?>"> <?php echo $row['Cat_name']; ?> </option>
<?php
}
?>
</select>
</td>
</tr>
<tr>
<td>Sub-Category</td>
<td><select name="subcategory"><?php

$sql11="select * from Subcategory;";
$resultt=mysqli_query($con,$sql11);
while($row=mysqli_fetch_array($resultt))
{
?>
<option value="<?php echo $row['Subcatid']; ?>"> <?php echo $row['Subcatname']; ?> </option>
<?php
}

$sqll="select Packid from package order by Packid desc limit 1";
		$r=mysqli_query($con,$sqll);
		$tmp=mysqli_fetch_array($r);
		$idd=$tmp['Packid']+1;
?>
</select>
<input type="hidden" name="packid" value="<?php echo $idd; ?>">
</td>
</tr>
<tr>
<td>Package Name</td>
<td><input type="text" name="packname" required></td>
</tr>
<tr>
<td>Package Price</td>
<td><input type="text" name="packprice" required></td>
</tr>
<tr>
<td>Details about package</td>
<td><textarea name="details" cols="22" rows="4"></textarea></td>
</tr>
<tr>
<td>Image-1</td>
<td><input type="file" name="f1" required></td>
</tr>
<tr>
<td>Image-2</td>
<td><input type="file" name="f2" required></td>
</tr>
<tr>
<td>Image-3</td>
<td><input type="file" name="f3"></td>
</tr>
<tr>
<td colspan="2" align=center><input type="submit" value="Submit" class="btn btn-success"></td>
</tr>

</table>
</form>
</body>
</html>
