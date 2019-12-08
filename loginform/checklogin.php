<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];

if($a=="admin" && $b=="admin")
{
	echo "<h1>"."<center>"."<font color='blue'>"."Login Successfully"."</h1>"."</font>"."</center>";
}
else{
	echo "<h1>"."<center>"."<font color='red'>"."Login Failed"."</h1>"."</font>"."</center>";
}
?>
</body>
</html>



<input type="hidden" name="posted" value="true">