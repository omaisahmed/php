<html>
<body>
<?php
session_start();
$a=$_GET["pid"];
$b=$_GET["qty"];
$ii=$_GET["i"];

//array_push(


$_SESSION['pid'][$ii]=$a;
$_SESSION['qty'][$ii]=$b;




print_r($_SESSION['pid'][$ii]);
print_r($_SESSION['qty'][$ii]);


$ii++;
$_SESSION['count']=$ii;

header("location:index.php");
//echo $_SESSION['count'];

?>