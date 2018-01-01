<html>
<body>
<?php session_start(); 
if($_SESSION['valid']!='A')
	{
		include('admin-check.php');
	}
     include('adminheader.php');

     ?>
</body>
</html>