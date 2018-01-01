<?php
if(!isset($_SESSION))
	{
		session_start();
	}

include('dataconnection.php');
$type=$_POST['type'];
$uname=$_POST['inputtext1'];
$password=$_POST['inputtext2'];
if($type=="user")
	$table="details";
else
	$table="admin";
$sql="select * from $table where username='$uname' AND password='$password';";
$result = mysqli_query($con,$sql);
$_SESSION['valid']='F';
if($type=="user")
{
if($row=mysqli_fetch_array($result))
	{
		
		$_SESSION["uname"] =$_POST["username"];
		$_SESSION['id']=$row['slno'];
		$_SESSION['name']=$row['name'];
		$_SESSION['dob']=$row['dob'];
		$_SESSION['phno']=$row['phno'];
		$_SESSION['email']=$row['email'];
		$_SESSION['valid']="T";
		header("Location: userdetails.php");
		echo "success";
	}
	else
	{
	?>
		//<script>
		alert('Invalid User details entered'); 
		window.location='login-form.php';
		</script>
	<?php	 
		//echo "<br /> <a href='login-form.php'>Try Again</a>";
	}	
}
else
{
	if($row=mysqli_fetch_array($result))
	{
		
		$_SESSION["uname"] =$_POST["username"];
		$_SESSION['id']=$row['slno'];
		$_SESSION['name']=$row['name'];
		$_SESSION['dob']=$row['dob'];
		$_SESSION['phno']=$row['phno'];
		$_SESSION['email']=$row['email'];
		$_SESSION['valid']="A";
		header("Location: category-admin.php");
		echo "success";
	}
	else
	{
	?>
		//<script>
		alert('Invalid Admin details entered'); 
		window.location='login-form.php';
		</script>
	<?php	 
		//echo "<br /> <a href='login-form.php'>Try Again</a>";
	}
}
?>