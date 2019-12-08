<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
$servername="localhost";
$uname="root";
$upassword="";
$dbname="shoppingmall";
$cn=new MySQLi($servername,$uname,$upassword,$dbname);

$sql="select * from products";

$result=$cn->query($sql);
echo "<table border=1 align=center>";
echo "<tr>";
while($row=$result->fetch_assoc())
{
$a=$row["pid"];
$b=$row["pname"];
$c=$row["pdescription"];
$d=$row["pqty"];
$e=$row["pprice"];
$f=$row["pimage"];

echo "<td>";
echo "<table border=1 bordercolor=black>";
echo "<tr align=center><td><img src=$f width=200 height=250></td></tr>";
echo "<tr  align=center><td><b>$a</b></td></tr>";
echo "<tr align=center><td>$b</td></tr>";
echo "<tr align=center><td>$c</td></tr>";
echo "<tr align=center><td>$d</td></tr>";
echo "<tr align=center><td>$e</td></tr>";
echo "<tr align=center><td><button src='cart.php?pid=$a'>Add To Cart</button></td></tr>";
echo "</table>";
echo "</td>";
}
echo "</tr></table>";

echo "<h1 align=center>SHOPPING CART</h1>";
$a=$_SESSION["pid"];
$b=$_SESSION["pname"];
$c=$_SESSION["pqty"];
$d=$_SESSION["pprice"];
$e=$_SESSION["ptotal"];

echo "<table border=1 align=center>";
echo "<tr><th>ProductID</th><th>Product Name</th><th>Product Quantity</th><th>Product Price</th><th>Total</th></tr>";
echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td></tr>";
echo "<tr><td align=center colspan=4><b>Grand Total</b></td><td>$e</td></tr>";

echo "<table>";


?>
</body>
</html>