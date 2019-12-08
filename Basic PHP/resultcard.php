<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript">
		function resultcard(){

		}
	</script>
</head>
<body>
<?php
session_start();
$newques=$_GET["newquestion"];
$_SESSION["newquestion"]=$ques;
$_SESSION["answers"]=$answ;




echo "<h1 align=center>Result Card</h1>";
echo "<table border=1 align=center>";
echo "<tr><th>Question</th><td>$ques</td></tr>";
echo "<tr><th>Answer</th><td>$answ</td></tr>";
$j++;
echo "<input type=hidden value=$j name=answers>";


?>
</body>
</html>