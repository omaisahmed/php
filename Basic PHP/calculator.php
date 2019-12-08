<html>
<?php

if (isset($_POST["t1"]))
{
$a=$_POST["t1"];
$b=$_POST["t2"];
$d=$_POST["b1"];
if (trim($d)=="+")
{
$c=$a+$b;
}
if (trim($d)=="*")
{
$c=$a*$b;
}
if (trim($d)=="/")
{
$c=$a/$b;
}
if (trim($d)=="-")
{
$c=$a-$b;
}
 
}
else
{
$a=0;
$b=0;
$c=0;

}



?>
<body>
<h1 align=center>Calculator</h1>
<hr color=red>
<br><br>
<form action="calculator.php" method="post">
<table border=1 align=center>
<tr><th>Number 1</th><td><input type=text name=t1 value=<?php echo $a ?>></td></tr>
<tr><th>Number 2</th><td><input type=text name=t2 value=<?php echo $b ?>></td></tr>
<tr><th>Result</th><td><input type=text name=t3 value=<?php echo $c ?>></td></tr>
<tr><td colspan=2><input type=submit name=b1 value="    +    "> <input type=submit name=b1 value="    -    "><input type=submit name=b1 value="    *    "><input type=submit name=b1 value="    /    "></td></tr>
</table>
</form>


</body>
</html>