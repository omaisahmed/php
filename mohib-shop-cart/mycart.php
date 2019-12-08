<html>
<body>
<h1 align=center>My Basket</h1>
<hr color=red>
<?php
session_start();
$pid=$_GET["pid"];
$q=$_GET["qty"];

$i=$_SESSION["index"];
$_SESSION["pid"][$i]=$pid;
$_SESSION["qty"][$i]=$q;
$i++;
$_SESSION["index"]=$i;


$servername="localhost";
$uname="root";
$password="";
$dbname="shoppingsite";
$connect=new MySQLi($servername,$uname,$password,$dbname);
echo "<table border=1px align=center>";
echo "<tr><th>S.NO</th><th>Product ID</th><th>Product Name</th><th>Quantity</td><th>Stock</th><th>Price</th></tr>";
$sno=1;
$t=0;
for($i=0;$i<$_SESSION["index"];$i++)
{
$p=$_SESSION["pid"][$i];
$sql="select * from products where pid='$p'";

$result=$connect->query($sql);
$row=$result->fetch_assoc();

$a=$row["pid"];
$b=$row["pname"];
$c=$row["pdescription"];
$d=$row["pqty"];
$e=$row["pprice"];
$f=$row["pimage"];

$t=$t+$e;

echo "<tr>";
echo "<td>$sno</td>";
echo "<td>$a</td>";
echo "<td>$b</td>";
echo "<td>$q</td>";
echo "<td>$d</td>";
echo "<td>$e</td>";
echo "</tr>";
$sno++;
}
echo "<tr align=right><td colspan=5><b>Total</b><td>$t</td></tr>";
echo "</table>";

?>
</body>
</html>