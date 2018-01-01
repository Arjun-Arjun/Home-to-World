<html>
<head>
<style>
input[type=text],input[type=password] {
            background: white;
            border: 1px solid #DDD;
            border-radius: 5px;
            box-shadow: 0 0 5px #DDD inset;
            color: #666;
            outline: none;
            height: 25px;
            width: 180px;

        }
        input[type=text]:focus,input[type=password]:focus{
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);

         border: 1px solid rgba(81, 203, 238, 1);
    }
</style>
</head>
<body>
<?php

$packid=$_GET['packid'];
session_start(); 
    if($_SESSION['valid']!='A')
	{
		include('admin-check.php');
	}
     include('adminheader.php');
     include('dataconnection.php');

     $sql="select * from package,category where package.category=category.cat_id and package.packid='$packid';";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);
?>
<br><br><br><br><br><form name="frm" method="POST" action="updatepackageaction.php">
<input type="hidden" name="packid" value="<?php echo $packid; ?>">
<table border=1 class="table table-hover"  align=center>
<caption><b><font size="15px"><center>Package Details</center></font></b></caption>

<tr>
<td><b><b>Category Name<b></td>
<td><?php echo $row['Cat_name']; ?> </td>
</tr>
<tr>
<td><b><b>Package Name<b></td>
<td><?php echo $row['Packname'] ?> </td>
</tr>
<tr>
<td><b><b>Details<b></td>
<td><?php echo $row['Detail']; ?> </td>
</tr>
<tr>
<td><b><b>Price<b></td>
<td><?php echo $row['Packprice']; ?> </td>
</tr>
<tr>
<td colspan=3 align=center>
Enter New Price:&nbsp&nbsp<input type="text" name="price" value="<?php echo $row['Packprice']; ?>" placeholder="enter new price">&nbsp&nbsp <input class="btn btn-success" type="submit" value="Update" ></td>
</td>
</table>
     </form>
     

</body>
</html>