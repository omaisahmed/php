<html>
<script language="javascript">
function abc()
{
	var a1=parseInt(Math.random()*9)
	var a2=parseInt(Math.random()*9)
	var a3=parseInt(Math.random()*9)
	
	
	
	
	document.getElementById("div1").innerHTML=a1
	document.getElementById("div2").innerHTML=a2
	document.getElementById("div3").innerHTML=a3
	
	if (a1==a2 && a2==a3)
	{
		alert("Win");
	}
}
</script>
<body>

<table border=1 align=center>
<tr>

<?php
$pic=array("images/m1.jpg","images/m2.jpg");
shuffle($pic);
for($i=0;$i<2;$i++){
	





echo "<td><div align=center><font size=20 color=green><img src=$pic[$i]></font></div></td>";
	
}
if($pic[0]==$pic[1] && $pic[1]==$pic[2]){
echo "win";
}
 ?>

</tr>
<tr>
	<td colspan=3 align="center"><input type=button value="Click Here" onClick="abc()"></td>
</tr>
</table>

</body>
</html>