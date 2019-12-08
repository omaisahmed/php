<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    
<?php
session_start();
$a=$_POST["t1"];
$b=$_POST["t2"];

$servername="localhost";
$uname="root";
$upassword="";
$dbname="examstore";

$connect=new MYSQLi($servername,$uname,$upassword,$dbname);

$sql="select * from register where username='$a' and pass='$b'";

$result=$connect->query($sql);
 if($result->num_rows>0)
 {
	 $_SESSION["loginid"]=$a;
	 header("http://localhost/omaisphp/boot%20store%20paper/login-php.php");
 }
 else
 {
	echo "Invalid user"; 
 }





?>


</body>
</html>