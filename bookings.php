<html>
	<head>
		<title>Bookings</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link href="default.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/w3.css"/>
    	<script src="js/jquery.min.js"></script>
    	<script src="js/bootstrap.js"></script>
    </head>
    <body background="images/back.png">
    <?php session_start(); 
if($_SESSION['valid']!='T')
	{
		include('login-check.php');
	}
     include('header.php'); ?>
    <form action="payment.php" method="POST">
    <table class="table  table-hover">
    <caption><h2 align="center">My Favourites</h2></caption>
    <tr>
    	
    	<th>S.No</th>
    	<th>Category Name</th>
    	<th>Sub Category Name</th>
    	<th>Package Name</th>
    	<th>Cost</th>
    	<th></th>
    </tr>
    <?php
    	include('dataconnection.php');
    	$id=$_SESSION['id'];
    	$sql="select * from bookings where id='$id';";
    	$res=mysqli_query($con,$sql);
    	$i=1;
    	while($row=mysqli_fetch_array($res))
    	{?>
    		<tr>
    			
    			<td> <?php echo $i; ?> </td>
    			<td> <?php echo $row['category']; ?></td>
    			<td> <?php echo $row['subcategory']; ?></td>
    			<td> <?php echo $row['package']; ?></td>
    			<td> <?php echo $row['price']; ?></td>
    			<td><a href="payment.php?slno=<?php echo $row['slno']; ?>" class="btn btn-warning">Book Now</a>
                <a href="deletebookings.php?slno=<?php echo $row['slno']; ?>" class="btn btn-danger">delete</a></td>
    		</tr>
    		<?php $i=$i+1; 

    	}
			?>
		<!--<tr>
        
		<td colspan="5" align="right">Total</td>
		<td>
		<?php
			$ss="select sum(price) s from bookings where id='$id';";
			$re=mysqli_query($con,$ss);
			$ro=mysqli_fetch_array($re);
			echo $ro['s'];
		?></td>
		</tr> -->
		<tr>
		
    </table>
    <input type="hidden" name="cost" value="<?php echo $ro['s']; ?>">
   	</form>
    
    </body>
</html>