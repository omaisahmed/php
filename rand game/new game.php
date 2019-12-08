<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<h1 align=center>CAPCTCHA</h1>
	<hr color=green />

	<br>
<?php
echo "<table border=1 align=center><tr>";
$a=rand(0,10);

$b=rand(0,10);

$c=$a*$b;

echo "<td>$a * <input type=text size=2>=$c</td>";

echo "</tr></table>";
?>

</body>
</html>