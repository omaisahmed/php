<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q=$_GET['q'];

$servername="localhost";
$uname="root";
$password="";
$dbname="miti";
$connect=new MySQLi($servername,$uname,$password,$dbname);
$sql="select * from student where course like '%$q%'";
$result=$connect->query($sql);
echo "<table>
<tr>
<th>Gr No</th>
<th>Student Name</th>
<th>Father Name</th>
<th>Course</th>
<th>Fees</th>
<th>Picture</th>
</tr>";
while($row=$result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['grno'] . "</td>";
    echo "<td>" . $row['sname'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['course'] . "</td>";
    echo "<td>" . $row['fees'] . "</td>";
	    echo "<td>" . $row['picture'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($connect);
?>
</body>
</html>