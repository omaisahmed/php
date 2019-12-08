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
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];
$e=$_POST["t5"];


$servername="localhost";
$uname="root";
$upassword="";
$dbname="examstore";

$connect=new MYSQLi($servername,$uname,$upassword,$dbname);

$sql="insert into register (username,emailid,pass,conpass,contactnbr) values('$a', '$b', '$c','$d','$e')";

$result=$connect->query($sql);

header("boot store paper/login-php.php");




?>


</body>
</html>