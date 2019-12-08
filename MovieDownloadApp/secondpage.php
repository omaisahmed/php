<html>
<body style="background-image:url(../umerfarooq/715vwvP5ZEL.png); background-repeat:no-repeat; ">
<?php
$servername="localhost";
$uname="root";
$upassword="";
$dbname="movie";
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$cn=new MySQLi($servername,$uname,$upassword,$dbname);

$sql="select * from movies where name='$a' OR year='$b' OR category='$c' ";
$result=$cn->query($sql);
$row=$result->fetch_assoc();

if ($result->num_rows>0)
{
	

$b=$row["mid"];
$c=$row["name"];
$d=$row["year"];
$e=$row["category"];
$f=$row["poster"];

echo "<table border=1 align='center' bgcolor='cyan'>";
echo "<tr><th>Movie ID</th><th>Movie Name</th><th>Catagory</th><th>Year</th><th>Picture</th></tr>";
$g="images/".$f;


echo "<tr><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td><img src=$g width=100 height=80></td></tr>";
echo "</table>";
}
else
{
echo "Result Not Found";	
}

?>
</body>
</html>