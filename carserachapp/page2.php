<html>
<body>
<?php

$a= $_POST["t1"];

$servername = "localhost";
$dbname="carsearchapp";
$username="root";
$password="";
$Connect = new MySQLi($servername,$username,$password,$dbname);
$sql="select * from cars where Regno='$a'";
$result=$Connect->query($sql);
if ($result->num_rows>0)
{
	$sql="select * from cars where Regno='$a'";
	$result=$Connect->query($sql);
	$row = $result->fetch_assoc();
	echo("sno ".$row["Regno"]."<br>");
echo("Owner Name ".$row["owner"]."<br>");
echo("Type ".$row["type"]."<br>");
echo("Make ".$row["Make"]."<br>");
echo("Registration year ".$row["Registration"]."<br>");

	}
else{
echo(" not found record");

}



?>
</body>
</html>
