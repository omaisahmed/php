<html>
<body>
<h1 align=center>ABC E-SHOP</h1>
<hr color=red>
<?php
$servername="localhost";
$uname="root";
$password="";
$dbname="onlineshop";

$connect=new MySQLi($servername,$uname,$password,$dbname);
$sql="select category from product group by category";
echo "<table border=1 align=center width='100%'>";
echo "<tr><td><table border=1>";
$result=$connect->query($sql);
while ($row=$result->fetch_assoc())
{
	$a=$row["category"];
	echo "<tr align=center><td width=200><a href='indexcat.php?cat=$a'>$a</a></td></tr>";
	
}
echo "</table></td>";
$sql="select * from product where category='shoes'";
echo "<td><table border=1><tr>";
$result=$connect->query($sql);
$count=0;
while ($row=$result->fetch_assoc())
{
	$a=$row["image"];
	$b=$row["pname"];
	$c=$row["description"];
	$d=$row["price"];
	$e=$row["pstock"];
	
	echo "<td>";
	echo "<table border=1>";
	echo "<tr><td><img src='images/$a' width=200 height=150></td></tr>";
	echo "<tr><td>$b</td></tr>";
	echo "<tr><td>$c</td></tr>";
	echo "<tr><td>$d</td></tr>";
	echo "<tr><td>$e</td></tr>";
	echo "</table>";
	echo "</td><td width=50></td>";
	$count++;
	if ($count>=3)
	{
		echo "</tr><tr>";
	$count=0;
	}
}
echo "</tr></table></td></tr></table>";
?>


</body>
</html>