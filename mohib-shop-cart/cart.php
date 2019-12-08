<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>		
	</head>

	<body>
<?php
session_start();
$pid=$_GET["pid"];
$q=$_GET["qty"];

$i=$_SESSION["index"];
$_SESSION["pid"][$i]=$pid;
$_SESSION["qty"][$i]=$q;
$i++;
$_SESSION["index"]=$i;


$servername="localhost";
$uname="root";
$password="";
$dbname="shoppingsite";
$connect=new MySQLi($servername,$uname,$password,$dbname);
?>
		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="#">Your online store</a>
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li><a href="#">Review</a></li>
				<li class="active"><a href="#">Order</a></li>
				<li><a href="#">Payment</a></li>
			</ol>
		</div>
		
		<div class="container text-center">

			<div class="col-md-5 col-sm-12">
				<div class="bigcart"></div>
				<h1>Your shopping cart</h1>
				<p>
					This is a free and <b><a href="http://tutorialzine.com/2014/04/responsive-shopping-cart-layout-twitter-bootstrap-3/" title="Read the article!">responsive shopping cart layout, made by Tutorialzine</a></b>. It looks nice on both desktop and mobile browsers. Try it by resizing your window (or opening it on your smartphone and pc).
				</p>
			</div>
			
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span>QTY</span>
						<span>ITEM</span>
						<span>Price</span>
					</li>
<?php
$sno=1;
$t=0;
for($i=0;$i<$_SESSION["index"];$i++)
{
$p=$_SESSION["pid"][$i];
$sql="select * from products where pid='$p'";

$result=$connect->query($sql);
$row=$result->fetch_assoc();

$a=$row["pid"];
$b=$row["pname"];
$c=$row["pdescription"];
$d=$row["pqty"];
$e=$row["pprice"];
$f=$row["pimage"];

$t=$t+$e;
?>
					<li class="row">
						<span class="quantity"><?php echo $q ?></span>
						<span class="itemName"><?php echo $b ?></span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price"><?php echo $e ?></span>
					</li>
<?php
$sno++;
}
?>					
					
					
					                   
					<li class="row totals">
						<span class="itemName">Total:</span>
						<span class="price">Rs.<?php echo $t ?></span>
						<span class="order"> <a class="text-center">ORDER</a></span>
					</li>
				</ul>
			</div>

		</div>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>

	</body>
</html>