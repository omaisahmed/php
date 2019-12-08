<html>
<body>
	<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION["pcode"]))
{
	
	$_SESSION["pcode"]=array();
	$_SESSION["pqty"]=array();
	$_SESSION["index"]=0;
	$_SESSION["total"]=0;
}
else
{
	$_SESSION['expire'] =5*60;
}
	

$servername="localhost";
$uname="root";
$password="";
$dbname="examstore";
$connect=new MySQLi($servername,$uname,$password,$dbname);
$sql="select * from popularproduct";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOE STORE</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>   
</head>
<body>
    <div class="header">
        <div class="headerdata">
            
        <div class="logo">
               <a href="index.php"> <font size="6px"> <b> Shoe Store </b> </font> <br> 
               <em> The Best Shoes Online </em>
               <blockquote>
                 <p>&nbsp;</p>
               </blockquote>
               </a>
			
            </div>
<!-- logo section end -->

<div class="header-nav">
     
     <ul>
         <img src="imgs\silder\3.png" width="40px" height="40px"/>
         <li><a  href="Paymentoption.php"> Checkout </a></li>
         <li><a class="header-nav-border" href="regsiter-php.php">Register</a></li>
         <li><a class="header-nav-border" href="login-php.php">Login</a></li>
         <li><a class="header-nav-border" href="mycart.php">My Cart</a></li>
       </ul>
     </div>


<!-- nav section end -->

<div class="currency">
         <div class="drop-down">
       Currency: 
        <select class="drop-down-selection">
            <option> PKR PAKISTANI-RUPEES </option> 
            <option> RIYAL SAUDIA-RIYAL</option> 
            <option> USD DOLLAR-DOLLAR </option> 
        </select>

    </div>

</div>

        </div>
    </div>

<!-- header section end -->


<div class="slider-section">
    <div class="slider-data">
        
<div class="nav">
        <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="casualshoe.php">CASUAL SHOES</a></li>
                <li><a href="formal.php">FORMAL SHOES</a></li>
                <li><a href="snaker.php">SNAKERS</a></li>
                <li><a href="contactus.html">CONTACT US</a></li>
                
                
              </ul>
</ul> 

</div>



<div class="serious">
    <h1 class="serious-heading"> Elite Serious </h1>
    <p class="serious-p"> <b> Sample Sub Heading Text </b> </p>
    <p class="serious-para"> Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph...Sample paragraph... </p>
    

</div>


<div class="slider-shoes">
    <img src="imgs/silder/shoes.png"/>
</div>

</div>
</div>
	<div align="center">
<form action="selectpaymentoption.php" method="post">
<h2> Select the Payment option: </h2>
<table border=0 cellpadding="6px;" style="padding: 26px;">
<tr><td><input type=radio value="Cash" name=p1></td><td>Cash on Delivery</td></tr>
<tr><td><input type=radio value="Easypaisa" name=p1></td><td>Easy Paisa</td></tr>
<tr><td colspan=2><input class="checkout-btn" type=submit value="Next"></td></tr>
</table>
		</form> </div>
	
	<div class="container-cat">
    <div class="container-nav">
        <ul>
            <li> Careers </li>
            <li> Invester Relations </li>
        </ul>

        <ul>
            <li> Careers </li>
            <li> Invester Relations </li>
        </ul>

        <ul>
            <li> Careers </li>
            <li> Invester Relations </li>
        </ul>

        <ul>
            <li> Careers </li>
            <li> Invester Relations </li>
        </ul>

        <ul>
            <li> Careers </li>
            <li> Invester Relations </li>
        </ul>

    </div>
</div>

</div>


<!-- container section end -->





<!-- footer section start -->

<div class="footer">
    <div class="footer-data">
        <a href="index.php" class="footer-nav" > Home | </a> 
        <a href="casualshoe.php" class="footer-nav" > Casual Shoes | </a>
        <a href="formal.php" class="footer-nav" > Formal Shoes | </a>
        <a href="snaker.php" class="footer-nav" > Snakers | </a>
       
        <a href="contactus.html" class="footer-nav" > Contact Us  </a>
        <h6 class="footer-data-heading"><em> © Copyright 2019.All Rights Reserved.Designed by  Kamran Jameel </em></h6>
    </div>
</div>


</body>
</html>
</body>
</html>