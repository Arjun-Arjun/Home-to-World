<?php
	include("dataconnection.php");

	$name=$_POST['name'];
	$uname=$_POST['username'];
	$d=$_POST['BirthDay'];
	$m=$_POST['BirthMonth'];
	$y=$_POST['BirthYear'];
	$dob="$d/$m/$y";
	$email=$_POST['email'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$phno=$_POST['phone'];

	$sqll="select slno from ids order by slno asc limit 1";
		$r=mysqli_query($con,$sqll);
		$tmp=mysqli_fetch_array($r);
		$id=$tmp['slno'];

	$sql1="delete from ids where slno='$id'";
		mysqli_query($con,$sql1);

	$sql1="select count(*) from ids";
		$res=mysqli_query($con,$sql1);
		$tmp=mysqli_fetch_array($res);
		$count=$tmp['count(*)'];
		if($count<10)
		{
			$sql1="select slno from ids order by slno desc limit 1";
			$r=mysqli_query($con,$sql1);
			$tmp=mysqli_fetch_array($r);
			$i=$tmp['slno'];
			$j=0;
			while($j!=10)
			{
					$i=$i+1;
					$s="insert into ids values($i)";
					mysqli_query($con,$s);
					$j=$j+1;
			}
		}	

	$sql="insert into details values('$id','$name','$email','$uname','$password','$dob','$gender','$phno');";
	mysqli_query($con,$sql);
	header("Location:index.php");

?>

		