<html>
<body>
<?php
session_start();
if (!isset($_SESSION["pid"]))
{
$_SESSION["pid"]=array();
$_SESSION["qty"]=array();
$_SESSION["index"]=0;
}
$q=1;
$servername="localhost";
$uname="root";
$password="";
$dbname="shoppingsite";
$connect=new MySQLi($servername,$uname,$password,$dbname);
$sql="select *from products";
$result=$connect->query($sql);
echo "<table border=1px align=center><tr>";
while ($row=$result->fetch_assoc())
{

$a=$row["pid"];
$b=$row["pname"];
$c=$row["pdescription"];
$d=$row["pqty"];
$e=$row["pprice"];
$f=$row["pimage"];

echo "<td>";
echo "<table border=1px align=center>";
echo "<tr><th>$a</th></tr>";
echo "<tr><td><img src='$f' width=200 height=200></td></tr>";
echo "<tr><td align=center>$b</td></tr>";
echo "<tr><td align=center>$c</td></tr>";
echo "<tr><td align=center>$d</td></tr>";
echo "<tr><td align=center>$e</td></tr>";
echo "<tr><td align=center><button><a href='cart.php?pid=$a&qty=$q'>Add to Cart</a></td></tr>";
echo "</table>";
echo "</td>";
}
echo "</table></tr>";
?>
</body>
</html>