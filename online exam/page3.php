<html>
<body>
<?php
$a=$_GET["qid"];
$b=$_GET["s"];
echo $b;
$servername="localhost";
$uname="root";
$password="";
$dbname="onlineexam";

$connect=new MySQLi($servername,$uname,$password,$dbname);

$sql="select * from questions where qid='$a' and subject='$b'";
$result=$connect->query($sql);
$row=$result->fetch_assoc();
echo "<h1 align=center>$b Test</h1>";
echo "<hr>";
$c=$a+1;
echo "<form action='page3.php' method=get>"; 
echo "<table border=1 align=center>";
print "<tr><td>Q.$a</td><td>".$row["q"]."</td></tr>";
print "<tr><td><input type=radio name=p1></td><td>".$row["op1"]."</td></tr>";
echo "<tr><td><input type=radio name=p1></td><td>".$row["op2"]."</td></tr>";
echo "<tr><td><input type=radio name=p1></td><td>".$row["op3"]."</td></tr>";
echo "<tr><td><input type=radio name=p1></td><td>".$row["op4"]."</td></tr>";
echo "<input type=hidden value='$c' name=qid>";
echo "<input type=hidden value='$b' name=s>";
echo "<tr><td colspan=2 align=right><input type=submit value=Next></td></tr>"; 
echo "</table>";
echo "</form>";

?>
</body>
</html>