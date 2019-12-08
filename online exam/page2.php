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

echo "<table border=1 align=center>";
echo "<tr><th>S.No</th><th>Subjects</th>";
$b=1;
while ($row=$result->fetch_assoc())
{
echo "<tr><td>$b</td><td><a href='page3.php?qid=1&s=".$row["subject"]."'>".$row["subject"]."</a></td></tr>";
$b=$b+1;
}
echo "</table>";



}
else
{
echo "Login Failed";

}
?>


</body>
</html>