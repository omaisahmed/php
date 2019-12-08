<html>
<body>
<h1 align=center>HASSAN BOOKSTORE</h1>
<hr color=red>
<h2>Search Result</h2>
<hr color=red><br><br>
<?php
$a=$_POST["t1"];
$servername="localhost";
$uname="root";
$password="";
$dbname="mybookstore";

$connect=new MySQLi($servername,$uname,$password,$dbname);

$sql="select * from books where Title like '%$a%'";
$result=$connect->query($sql);
echo "<table border=1 align=center>";
echo "<tr><th>S.No</th><th>Book</th>";
$b=1;
while ($row=$result->fetch_assoc())
{
echo "<tr><td>$b</td><td>".$row["Title"]."</td></tr>";
$b=$b+1;
}
echo "</table>";

?>


</body>
</html>