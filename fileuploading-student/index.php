<html>
<?php
$servername="localhost";
$uname="root";
$password="";
$dbname="studentdb";

$connect=new MySQLi($servername,$uname,$password,$dbname);
$sql="select * from student where Rollno=1003";
$result=$connect->query($sql);
$row=$result->fetch_assoc();

	$a=$row["Rollno"];
	$b=$row["Sname"];
	$c=$row["fname"];
	$d=$row["course"];
	$e=$row["timing"];
	$f=$row["image"];
	
	
?>
<body>
<h1 align="center">Student Information Form</h1>
<hr color="#FF0000">
<a href='addnew.php'>Addnew Student</a>
<table border=1 align="center">
<tr><td>Roll No</td><td><?php echo $a ?></td><td rowspan=5><img src='<?php echo $f ?>'></td></tr>
<tr><td>Student Name</td><td><?php echo $b ?></td></tr>
<tr><td>Father Name</td><td><?php echo $c ?></td></tr>
<tr><td>Course</td><td><?php echo $d ?></td></tr>
<tr><td>Timing</td><td><?php echo $e ?></td></tr>
</table>
 </body>
</html>