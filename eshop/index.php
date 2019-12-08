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
         <li><a class="header-nav-border" href="register-php.php">Register</a></li>
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
                <li><a class="active" href="#home">HOME</a></li>
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

<!-- slider section end -->


<div class="container">

<div class="product">
<h4 class="com"> COMPARE <b class="pro">PRODUCT</b> </h4> 
<p class="product-para"> You have You have You have </p>
</div>


<div class="cart">
        <h4 class="cart-com"> MY <b class="cart-pro">CART &nbsp; (<?php echo $_SESSION["index"];?>)</b> </h4> 
<div class="backet">
    <a href="mycart.php"><img src="./imgs/catimgs/basket.png" width='50px' height='50px'/></a>
</div>
<p class="cart-para"> You have <b>no item</b> <br> in your shopping cart </p>

    </div>



    <div class="newsletter">
<h3 class="news-heading"> NEWSLETTER </h3>
<p class="news-para"> Sign up for our newsletter </p>
<input type="text" placeholder="Sign up" class="news-text" /> <button class="news-button"> Subscribe </button> <br> <br> 
        </div>



        <div class="sale">
<div class="end-sale">
    END OF MONTH DEALS
</div>

<h5 class="sale-com"> SALE <b class="sale-pro">UPTO 50%</b> </h5> 
<h5 class="end-sale-heading">  >> Learn More </h5> 
            </div>

<!-- side bar -->
<div class="side-bar">
    <div class="poll">
 <div class="side-bar-poll"> 
 
 <div class="poll-right-arrow">  <img src="imgs/silder/2.ico" width="15px" height="15px"/></div> <h6 class="poll-heading"> Community Poll </h6>    

 </div> 
<hr>
<p class="poll-para"> What is the main reason for you to purchase product online </p>
<ul class="a">
        <li> <input type="radio" name="gender" value="male"> Lower Price</li>
        <li> <input type="radio" name="gender" value="male"> Bigger Choice</li>
        <li> <input type="radio" name="gender" value="male"> Payment Security</li>
        <li> <input type="radio" name="gender" value="male"> Other</li>
      </ul>
    </div>


    <div class="tags">
    <div class="side-bar-poll"> 
 
 <div class="poll-right-arrow">  <img src="imgs/silder/2.ico" width="15px" height="15px"/></div> <h6 class="poll-heading"> Popular Tags </h6>    

 </div> 
            <hr>
            <a href="#" class="tags-advan">advantages</a> <a href="#" class="tags-community">Community</a>
            <a href="#" class="tags-compaines">Compaines</a> <a href="#" class="tags-community">Community</a>
            <a href="#" class="tags-advan">advantages</a> <a href="#" class="tags-community">Community</a>
            <a href="#" class="tags-advan">advantages</a> <a href="#" class="tags-community">Community</a>
            <a href="#" class="tags-advan">advantages</a> <a href="#" class="tags-community">Community</a>
        </div>

</div>

<!-- cat section -->

<div class="cat">
<div class="cat-product">
    <h3 class="cat-heading"> POPULAR PRODUCTS </h3>
<?php
$result=$connect->query($sql);

$count=1;
while ($row=$result->fetch_assoc())
{
$a=$row["pcode"];
$sql1="select * from products where pcode='$a'";
$result1=$connect->query($sql1);
$row1=$result1->fetch_assoc();

$b=$row1["pname"];
$c=$row1["pprice"];
$d=$row1["pimage"];
$cat="cat-".$count;
echo "<div class='$cat'>";
echo "<div class='cat-img-1'><img src='$d' width='200px' height='180px'/><font color=brown>$b</font></div>";
echo "<b class='cat-1-b'> RS:$c </b> <a href='addtocart.php?pcode=$a'><button class='cat-button'> ADD TO CART </button></a></div>";
$count++;
}
?>
            

</div>
</div>

<!-- right side bar -->
<div class="index-right-side-bar">
<div class="shop-price">
   
    <div class="shop-language">
        Your Language:
        <select class="language-drop-selection"> <option> English </option> 
            <option> Urdu </option> 
            <option> French </option> 
            <option> Span </option> 
        </select>
    </div>
    <p> <b> Shop By</b> <br>
    Shopping Option </p>

    <p> <b> Price</b> <br><br>
        RS100-RS300 (1)<br>
        RS100-RS300 (2)<br>
        RS100-RS300 (1)<br>
     </p>

</div>


<div class="free-shopping">
    <div class="free-online-order">
        <h2 class="free-online-heading"> free shipping  </h2>
        <h5 class="free-online-b"> Free Online Order </h5>
    </div>
</div>


</div>


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
        <h6 class="footer-data-heading"><em> © Copyright 2019.All Rights Reserved.Designed by  Omais Ahmed </em></h6>
    </div>
</div>


</body>
</html>