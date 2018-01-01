<?php
session_start(); 
    if($_SESSION['valid']!='A')
	{
		include('admin-check.php');
	}
     include('adminheader.php');


 $catid=$_POST['category'];
 $subcatid=$_POST['subcategory'];
 $packid=$_POST['packid'];
 $packname=$_POST['packname'];
 $packprice=$_POST['packprice'];
 $details=$_POST['details'];

 
		$fname = $_FILES["f1"]["name"];
		$dst = "./images/packimages/".$fname;
		move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);

		$fname1 = $_FILES["f2"]["name"];
		$dst = "./images/packimages/".$fname1;
		move_uploaded_file($_FILES["f2"]["tmp_name"],$dst);


		$fname2 = $_FILES["f3"]["name"];
		$dst = "./images/packimages/".$fname2;
		move_uploaded_file($_FILES["f3"]["tmp_name"],$dst);

include('dataconnection.php');
$sql="insert into package values('$packid','$packname','$catid','$subcatid','$packprice','$fname','$fname1','$fname2','$details')";
mysqli_query($con,$sql);
header("Location:category-admin.php");		
 
?>