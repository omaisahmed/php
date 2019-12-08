<html>
<body>
<?php
session_start();
if(!isset($_SESSION['pid']))
{
$_SESSION['pid'] = array();
$_SESSION['qty'] = array();
$_SESSION['count']=0;
$ii=$_SESSION['count'];
$bb=1;
}
else
{
	$ii=$_SESSION['count'];
	$bb=1;
}

$servername="localhost";
$uname="root";
$upassword="";
$dbname="shoppingmall";
$cn=new MySQLi($servername,$uname,$upassword,$dbname);

$sql="select * from products";

$result=$cn->query($sql);
echo "<table border=0 align=center><tr>";
while ($row=$result->fetch_assoc())
{

$a=$row["pid"];
$b=$row["pname"];
$c=$row["pdescription"];
$d=$row["pqty"];
$e=$row["pprice"];
$f=$row["pimage"];
echo "<td>";
echo "<table border=2 bordercolor=black>";
echo "<tr align=center><td><img src=$f width=200 height=250></td></tr>";
echo "<tr  align=center><td><b>$a</b></td></tr>";
echo "<tr  align=center><td>$b</td></tr>";
echo "<tr  align=center><td>$c</td></tr>";
echo "<tr  align=center><td>$d</td></tr>";
echo "<tr  align=center><td>$e</td></tr>";
echo "<tr  align=center><td><button><a href='addtocart.php?pid=$a&qty=$bb&i=$ii'>Add to Cart</a></button></td></tr>";
echo "</table>";
echo "</td>";
}
echo "</tr></table>";
echo "<table border=1 align=center>";
echo "<tr><td colspan=5 align=center>My Cart</td></tr>";
echo "<tr><th>S.No</th><th>Product ID</th><th>Quantity</th><th>Price</th></tr>"; 
for($x = 0; $x < $_SESSION["count"]; $x++) {
	$pid=$_SESSION["pid"][$x];
	
	$sql="select * from products where pid=$pid";
	$result=$cn->query($sql);
	$row=$result->fetch_assoc();
	$p=$row['pprice'];
	$sno=$x+1;
	echo "<tr><th>$sno</th><th>".$_SESSION["pid"][$x]."</th><th>".$_SESSION["qty"][$x]."</th><th>Rs. $p</th><td><input type=button value='Remove'></tr>"; 
}

echo "</table>";

?>