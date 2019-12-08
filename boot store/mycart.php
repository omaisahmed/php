<?php
$servername="localhost";
$uname="root";
$password="";
$dbname="examstore";
$connect=new MySQLi($servername,$uname,$password,$dbname);
?>
<html>
<body>
<h1 align=center>My Cart</h1>
<hr color=red>
<table border=1 align=center>
<tr><th>S.No</th><th>Product Code</th><th>Quantity</th><th>Stock</th><th>Unit Price</th><th>Amount</th></tr>
<?php
session_start();
$count=1;
$i=0;
foreach($_SESSION["pcode"] as $pcode)
{
	$sql="select * from products where pcode='$pcode'";
	$a=$_SESSION["pqty"][$i];
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();
	$stock=$row["pstock"];
	$price=$row["pprice"];
	$amount=$price*$a;
	
echo "<tr><td>$count</td><td>$pcode</td><td><input type=number min=1 max=10 value='$a'></td><td>$stock</td><td>Rs. $price</td><td>$amount</td></tr>";
$i++;
$count++;
}


?>