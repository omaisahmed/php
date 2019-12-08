<?php
if(isset($_POST["submit"])){
	if (isset($_POST["gender"])) {
		# code...

$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['dob'];
$d=$_POST['email'];
$e=$_POST['password'];
$f=$_POST['confirmpassword'];
$g=$_POST['cnic'];
$h=$_POST['mobilenumber'];
$i=$_POST['gender'];
$j=$_POST['address'];
$k=$_POST['country'];
$l=$_POST['city'];
$m=$_POST['postalcode'];

	}
}
$host = "sql202.epizy.com";
$userName = "epiz_23923989";
$password = "po018gP7agsuK";
$dbName = "epiz_23923989_register";

// Create database connection
$connect=mysqli_connect($host,$userName,$password,$dbName);
$sql="INSERT INTO myform(Firstname,Lastname,Dateofbirth,Email,Password,Confirmpassword,Cnic,Mobilenumber,Gender,Address,Country,City,Postalcode) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";
$result=$connect->query($sql);


$msg="Login Successfully".'\n'."Your data has been saved!";
echo "<script>alert('".$msg."');</script>";

if(mysqli_connect_errno($connect))
{
		echo "<script>alert('Login Failed');</script>";
}
?>