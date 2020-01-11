<html>
<head>
	<script type="text/javascript">
		function btn(){
			a1=document.getElementById("p1").value
			a2=document.getElementById("p2").value
			a3=document.getElementById("p3").value
			a4=document.getElementById("p4").value
			if (a1=="off" && a2=="off" && a3=="off" && a4=="off")
			{
			alert("Please select any answer")	
			return false;
			}
		}
			function option1()
			{
			document.getElementById("p1").value='on';	
			document.getElementById("p2").value='off';	
			document.getElementById("p3").value='off';	
			document.getElementById("p4").value='off';	
			}
			function option2()
			{
			document.getElementById("p1").value='off';	
			document.getElementById("p2").value='on';	
			document.getElementById("p3").value='off';	
			document.getElementById("p4").value='off';	
			}
			function option3()
			{
			document.getElementById("p1").value='off';	
			document.getElementById("p2").value='off';	
			document.getElementById("p3").value='on';	
			document.getElementById("p4").value='off';	
			}
			function option4()
			{
			document.getElementById("p1").value='off';	
			document.getElementById("p2").value='off';	
			document.getElementById("p3").value='off';	
			document.getElementById("p4").value='on';	
			}
			
				
	</script>
</head>
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
echo "<form action='page3.php' method=get onsubmit='return btn()'>"; 
echo "<table border=1 align=center>";
print "<tr><td>Q.$a</td><td>".$row["q"]."</td></tr>";
print "<tr><td><input type=radio id=p1 name=b1 value='off' onclick='option1()'></td><td>".$row["op1"]."</td></tr>";
echo "<tr><td><input type=radio id=p2 name=b1 value='off'  onclick='option2()'></td><td>".$row["op2"]."</td></tr>";
echo "<tr><td><input type=radio id=p3 name=b1 value='off'  onclick='option3()'></td><td>".$row["op3"]."</td></tr>";
echo "<tr><td><input type=radio id=p4 name=b1 value='off'  onclick='option4()'></td><td>".$row["op4"]."</td></tr>";
echo "<input type=hidden value='$c' name=qid>";
echo "<input type=hidden value='$b' name=s>";
echo "<tr><td colspan=2 align=right><input type=submit value=Next></td></tr>"; 



echo "</table>";
echo "</form>";

?>


</body>
</html>