<html>
<body>
<h1 align=center>ONLINE EXAMINATION SYSTEM</h1>
<hr color=red>
<h2>Welcome to Exam</h2>
<hr color=red><br><br>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$servername="localhost";
$uname="root";
$password="";
$dbname="onlineexam";

$connect=new MySQLi($servername,$uname,$password,$dbname);

$sql="select * from examuser where loginid='$a' and password='$b'";
$result=$connect->query($sql);

if ($result->num_rows>0)
{
$sql="select subject from questions group by subject";
$result=$connect->query($sql);

echo "<div style='border:2px solid black;width:30%;'>";
echo "Select Subject";
echo "<ul>";

while ($row=$result->fetch_assoc())
{
echo "<li><a href='page3.php?qid=1&s=".$row["subject"]."'>".$row["subject"]."</a></li>";

}
echo "</ul></div>";


}
else
{
echo "Login Failed";

}
?>


</body>
</html>