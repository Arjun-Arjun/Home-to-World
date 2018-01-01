<html>
	<head>
		<title>Bookings</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link href="default.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/w3.css"/>
    	<script src="js/jquery.min.js"></script>
    	<script src="js/bootstrap.js"></script>
        <script type="text/javascript">
                function checkdel()
                {
                    if(confirm("Do you want to delete this package"))
                        return true;
                    else
                        return false;
                }
            </script>
    </head>
    <body background="images/back.png">
    <div>
    <?php session_start(); 
    if($_SESSION['valid']!='A')
	{
		include('admin-check.php');
	}
     include('adminheader.php');
     $id=$_SESSION['id']; ?>
     </div>
     <div>
    <form action="deletepackages.php" method="GET" onsubmit="return checkdel();"><br><br><br><br>
    <table class="table  table-hover">
    <caption><h2 align="center">Packages Details</h2></caption>
    <tr>
    	
    	<th>S.No</th>
        <th> Category Name</th>
        <th>Package Name</th>
        <th>Price</th>
        <th></th>

    	
    	
    </tr>
    <?php
    	include('dataconnection.php');
    	$id=$_SESSION['id'];
    	$sql="select * from package,category where package.category=category.cat_id;";
    	$res=mysqli_query($con,$sql);
    	$i=1;
    	while($row=mysqli_fetch_array($res))
    	{?>
    		<tr>
    			
    			<td> <?php echo $i; ?> </td>
                <td> <?php echo $row['Cat_name']; ?></td>
                <td> <?php echo $row['Packname']; ?></td>
                <td> <?php echo $row['Packprice']; ?></td>
                <td><a href="updatepackages.php?packid=<?php echo $row['Packid']; ?>" class="btn btn-primary">Update</a>
                        <input type="hidden" name="packid" value="<?php echo $row['Packid']; ?>">
                        <input type="submit" value="delete" class="btn btn-danger">
           <!-- <a href="deletepackages.php?packid=<?php echo $row['Packid']; ?>" class="btn btn-danger">Delete</a> -->
            </td>
    		</tr>
    		<?php $i=$i+1; 

    	}
			?>
		
		
		
    </table>
   
   	</form>
    
    </body>
</html>