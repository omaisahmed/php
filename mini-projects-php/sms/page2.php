<html>
<body>
<?php
$servername="localhost";
$uname="root";
$upassword="";
$dbname="miti";
$a=$_POST["t1"];
$cn=new MySQLi($servername,$uname,$upassword,$dbname);

$sql="select * from student where grno='$a'";
$result=$cn->query($sql);
$row=$result->fetch_assoc();

if ($result->num_rows>0)
{
	

$b=$row["sname"];
$c=$row["fname"];
$d=$row["course"];
$e=$row["fees"];
$f=$row["picture"];

echo "<table border=1>";
echo "<tr><th>Gr No</th><th>Student Name</th><th>Father Name</th><th>Course</th><th>Fees</th><th>Picture</th></tr>";
$g="studentimages/".$f;

echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td><img src=$g width=100 height=50></td></tr>";
echo "</table>";
}
else
{
echo "Result Not Found";	
}

?>
</body>
</html>