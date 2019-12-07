<!doctype html>
<html>
<head>
<script>
var input=document.getElementById("t1");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("button1").click();
  }
});
function abc()
{
	var input=document.getElementById("t1");
	input.focus()
}
</script>
</head>
<?php
session_start();
?>
<head>
<meta charset="utf-8">
<title>Aans</title>

<link rel="stylesheet" href="lib/css/bootstrap.min.css">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="lib/js/bootstrap.min.js" ></script>



</head>

<body class= "bg-success" onload="abc()">
<div class="container">	
	<br>
	<div align="center"><h1>SHOPPING CARD LIST</h1></div>
	</div>
	<hr class="bg-dark ">
	
	<div class="container">
	<div  align="center">
    <form action="" method=get>
<input type="text" name="text" id=t1 placeholder="Enter Code Number">
<input type=submit value='click here' id=button1 name="SubmitButton" hidden="true">
</form>
	</div>
<?php    
if(isset($_GET['SubmitButton']))
{ //check if form was submitted
  $input=$_GET['text']; //get input text
  $message = "Success! You entered: ".$input;
  
  
$servername="localhost";
$uname="root";
$password="";
$dbname="rainbow";
$con=new MySQLi($servername,$uname,$password,$dbname);
//$sql="select * from product";

$sql="select * from product where pcode='$input'";  
$result=$con->query($sql);

	$row=$result->fetch_assoc();
	$a=$row['pcode'];
	$b=$row['pname'];
	$c=$row['pprice'];
	$d=$row['pstock'];
  $e=$c*$d;
  $t=$_SESSION["total"];
  $t=$t+$e;
  $_SESSION["total"]=$t;
  
  $count=$_SESSION["count"];
  $x=$_SESSION["text"];
  if ($count==0)
  {
	  $count++;
	  $x="<table class='table table-sm table-dark table-hover'>";
	  $x=$x."<thead><tr><th>#</th><th>NAME</th><th>QTY</th><th>PRICE</th><th>TOTAL</th></tr></thead>";
	  $x=$x."<tbody>";
	  $f=$count;
    $x=$x."<tr><th>$f</th><td>$b</td><td>$d</td><td>$c</td><td>$e</td></tr>";
   }
   else
   {
	   $count++;
	$x=$x."<tr><th>$count</th><td>$b</td><td>$d</td><td>$c</td><td>$e</td></tr>";   
   }
  $_SESSION["count"]=$count;
   $_SESSION["text"]=$x;
   echo $_SESSION["text"];
}    
if(!isset($_GET['text']))
{
	echo "SasaS";
$_SESSION["total"]=0;
$_SESSION["count"]=0;
$_SESSION["text"]="";
}
	?>
</tbody>
<tfoot>
	<tr>
      <th><?php echo $_SESSION["count"]?> Items</th>
      <td colspan="3" align="center">Total</td>
      
		<td><?php echo $_SESSION["total"]?></td>
    </tr>
    
	</tfoot>
</table>


 

	</div>

</body>
</html>

