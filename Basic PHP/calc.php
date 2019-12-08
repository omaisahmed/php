<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<?php

if(isset($_POST["t1"])){
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['b1'];

	if(trim($c)=="+"){
		$d=$a+$b;
	}

	if(trim($c)=="-"){
		$d=$a-$b;
	}

	if(trim($c)=="*"){
		$d=$a*$b;
	}

	if(trim($c)=="/"){
		$d=$a/$b;
	}
}
?>
<body>
<h1 align="center">CALCULATOR</h1>
<hr color="blue">
<br/><br/>
<form method="post"  action="echo $_SERVER['PHP_SELF'];">
	<table border="1" align="center">
	<tr>
		<th>Enter First Value</th>
		<td><input type="text" name="t1" value=<?php echo $a ?>></td>
	</tr>
	<tr>
		<th>Enter Second Value</th>
		<td><input type="text" name="t2" value=<?php echo $b ?>></td>
	</tr>
	<tr>
		<th>Result</th>
		<td><input type="text" name="t3" value=<?php echo $d ?>></td>
	</tr>

	<tr>
		<td colspan="2" align="center"><input type="submit" name="b1" value="    +    "><input type="submit" name="b1" value="    -    "><input type="submit" name="b1" value="    *    "><input type="submit" name="b1" value="    /    "></td>
	</tr>
</table>
</form>
</body>
</html>