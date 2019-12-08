<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<h1 align=center>WORD GAME</h1>
	<hr color=green />

	<br>
<?php
$word=array("PAKISTAN","INDIA","IRAQ","FRANCE","AFGHANISTAN");
$r=rand(0,4);
$sw=$word[$r];
$sw=strtoupper($sw);

$l=strlen($sw);

echo "<table border=1 align=center><tr>";
for($i=0; $i<$l; $i++)
{
	$character=substr($sw,$i,1); 


if ($i%2 == 0) {
	echo "<td><input type='text' size='1' style='text-transform: uppercase';></td>";
}
else{
	echo "<td>$character</td>";
}

}
echo "</tr></table>";
?>
</body>
</html>