<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a=$_POST['t1'];
$b=$_POST['t2'];

$servername='localhost';
$username='root';
$password='';
$dbname='login';
$connect=mysqli_connect($servername,$username,$password,$dbname);
$sql="INSERT INTO userlogin(Username,Password) VALUES('$a','$b')";
$result=$connect->query($sql);

echo "<script>alert('Login Successfully');</script>";
if(mysqli_connect_errno($connect))
{
		echo "<script>alert('Login Failed');</script>";
}
?>
</body>
</html>