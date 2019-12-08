<html>
<body>
<?php
session_start();

$pid=$_GET["pid"];
$servername="localhost";
$uname="root";
$upassword="";
$dbname="shoppingmall";
$cn=new MySQLi($servername,$uname,$upassword,$dbname);

$sql="select * from products where pid=$pid";

$result=$cn->query($sql);
$row=$result->fetch_assoc();

$a=$row["pid"];
$b=$row["pname"];
$c=$row["pdescription"];
$d=$row["pqty"];
$e=$row["pprice"];
$f=$row["pimage"];


$_SESSION["pid"]=$a;
$_SESSION["pname"]=$b;
$_SESSION["pqty"]=1;
$_SESSION["pprice"]=$e;
$_SESSION["ptotal"]=$e*1;

header("location:http://localhost/omais/shoppingmall/home.php");
?>