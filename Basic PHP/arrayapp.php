<html>
<body>
<?php
session_start();

if (isset($_POST["newquestion"]))
{
$i=$_POST["newquestion"];
$j=$_POST["answers"];
}
else
{
$i=0;
$j=0;
}


$marks=0;
if (isset($_POST["p1"]))
{
$a=$_POST["p1"];
$marks=$_POST["marks"];
$b=$_POST["answers"];
if($a==$b){
	$marks++;

}
else 
{

$marks--;
}
}
	



$question=array("What is the name of institute?"   ,"what is your name?"   ,"What is the name of institute?"   ,"what is your name?"   ,"what is your name?");
$option1=array("Memon","omais","31","41","51");
$option2=array("Memon Institute","ali","32","42","52");
$option3=array("Memon Industrial technology Institute","hammad","33","43","53");
$option4=array("None of the above","azhar","34","44","54");

$answer=array("Memon","omais","Memon","omais","Memon");

$q=$question[$i];
$op1=$option1[$i];
$op2=$option2[$i];
$op3=$option3[$i];
$op4=$option4[$i];
$ans=$answer[$i];

$ques=$question[$j];
$answ=$answer[$j];

echo "<form action='arrayapp.php' method=post>";
echo "<table border=1 align=center>";
echo "<tr><td colspan=2>$q</td></tr>";
echo "<tr><td><input type=radio name=p1></td><td>$op1</td></tr>";
echo "<tr><td><input type=radio name=p1></td><td>$op2</td></tr>";
echo "<tr><td><input type=radio name=p1></td><td>$op3</td></tr>";
echo "<tr><td><input type=radio name=p1></td><td>$op4</td></tr>";
echo "<tr><td>$ans</td></tr>";
$i++;
echo "<input type=hidden value=$i name=newquestion>";

if ($i==5) {
	echo "<tr><td colspan=2 align=right><input type=submit value='Submit' onclick='resultcard()'></td></tr>";
	
}
else{
	echo "<tr><td colspan=2 align=right><input type=submit value='Next'></td></tr>";
	}

echo "</table>";




echo "<br>";

echo "<h1 align=center>Result Card</h1>";
echo "<table border=1 align=center>";
echo "<tr><th>Question</th><td>$ques</td></tr>";
echo "<tr><th>Answer</th><td>$answ</td></tr>";
$j++;
echo "<input type=hidden value=$j name=answers>";



echo "<br>marks=$marks<br>";
echo "<input type=hidden value='$marks' name=marks>";
echo "</form>";

?>

</body>
</html>