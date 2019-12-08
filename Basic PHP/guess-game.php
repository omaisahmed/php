<!DOCTYPE html>
<html>
<head>
	<title>Guess Game</title>
	<style type="text/css">
		h1{
			color:blue;
		}
		h3{
			color: red;
		}
		h2{
			color: maroon;
		}
	</style>
</head>
<?php
if(isset($_POST['posted'])){
	$guess=$_POST['guess'];
	$number=rand(1,10);
}
if($guess>$number){
	echo "<h1>Your Guess is too High!!!</h1>"."<br>";
	echo "<h3>The number is $number, Please try again!!!</h3>"."<br>";
}
else if($guess<$number){
	echo "<h1>Your Guess is too Low!!!</h1>"."<br>";
	echo "<h3>The number is $number, Please try again!!!</h3>"."<br>";
}
else{
	echo "<h1>The number is $number, You Win the match!!!!!</h1>"."<br>";
}


?>
<body>
	<form method="POST" action="guess-game.php">
		<input type="hidden" name="posted" value="true"><h2>Selected Numbers Between 1 to 10</h2>
		<input type="text" name="guess">
		<input type="submit" name="Submit">
	</form>

</body>
</html>