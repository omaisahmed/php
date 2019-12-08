<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php
session_start();
error_reporting(0);
include('database form/database.php');

    
	$firstname=$_POST['first_name'];
	$lastname=$_POST['last_name'];
	$department=$_POST['department'];
	$email=$_POST['email'];
	mysqli_query($connect,"INSERT INTO register(FirstName,LastName,Department,Email) VALUES('$firstname','$lastname','$department','$email')");

		echo "<script>alert('Login Successfully');</script>";

	
	
	


?>
</body>
</html>