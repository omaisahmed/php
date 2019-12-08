<!DOCTYPE html>
<?php
$servername="localhost";
$uname="root";
$password="";
$dbname="examstore";
$connect=new MySQLi($servername,$uname,$password,$dbname);
$sql="select * from products where pcategory='Casual Shoes'";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>   
</head>
<body>
    <div class="header">
        <div class="headerdata">
            
            <div class="logo">
                <div class="shoe">SHOE</div>
                <div class="store">STORE</div>
                <p> The Best Shoe Store online </p>
            </div>
<!-- logo section end -->
<div class="header-nav">
        <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="#">My Cart</a></li>
                <li><a href="#">Checkout</a></li>
                <li><a href="#">Login</a></li>
              </ul>
              
</div>


<!-- nav section end -->

<div class="currency">
        Wellcome To Our Online Store

         <div class="drop-down">
            Currency:
        <select class="drop-selection"> <option> USD DOLLAR-DOLLAR </option> 
            <option> USD DOLLAR-DOLLAR </option> 
            <option> USD DOLLAR-DOLLAR </option> 
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
                <li><a href="#home">HOME</a></li>
                <li><a class="active"  href="#news">CASUAL SHOES</a></li>
                <li><a href="#news">ATHLETIC SHOES</a></li>
                <li><a href="#contact">BRIDAL SHOES</a></li>
                <li><a href="#about">COMFORT SHOES</a></li>
                <li><a href="#about">NEW RELEASES</a></li>
                <li><a href="#about">GIFT CARDS</a></li>
              </ul>
</ul> 

</div>



<div class="serious">
    <h1 class="serious-heading"> elite serious </h1>
    <p class="serious-p"> <b> NAM UT SCELERISQUE PURUS.</b> </p>
    <p class="serious-para"> Famous Footwear is part of Caleres Inc., a diverse portfolio of global footwear brands. Combined, these brands help
         make Caleres a company with both a legacy and a mission. Caleres' legacy includes more than 130-years of craftsmanship, 
         a passion for fit and a business savvy, with a mission to continue to inspire people to feel good…feet first.</p>
    

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
        <h4 class="cart-com"> MY <b class="cart-pro">CART</b> </h4> 
<div class="backet">
    <img src="./imgs/catimgs/basket.png"/>
</div>
<p class="cart-para"> You have <b>no item</b> <br> in your shopping cart </p>

    </div>



    <div class="newsletter">
<h3 class="news-heading"> NEWSLETTER </h3>
<p class="news-para"> Sign up for our newsletter </p>
<input type="text" class="news-text" /> <button class="news-button"> Subscribe </button>
        </div>



        <div class="sale">
<div class="end-sale">
    END OF MONTH DEALS
</div>

<h6 class="sale-com"> SALE <b class="sale-pro">>UPTO 50%</b>  </h6> 

            </div>
<div>Learn More</div>

<!-- side bar -->
<div class="side-bar">
    <div class="poll">
<h4 class="poll-heading"> Community Poll </h4>
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
            <h4 class="tags-heading"> Popular Tags </h4>
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
    <h3 class="cat-heading">Casual Shoes </h3>
<?php
$result=$connect->query($sql);

$count=1;
while ($row=$result->fetch_assoc())
{
$a=$row["pcode"];
$b=$row["pname"];
$c=$row["pprice"];
$d=$row["pimage"];
$cat="cat-".$count;
echo "<div class='cat-1'>";
echo "<div class='cat-img-1'><img src='$d' width='200px' height='180px'/><font color=brown>$b</font></div>";
echo "<b class='cat-1-b'> RS:$c </b> <button class='cat-button'> ADD TO CART </button></div>";
$count++;
}
?>



    

        


            

</div>
</div>

<!-- right side bar -->
<div class="right-side-bar">
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
        <h2> free shipping  </h2>
        <b class="free-online"> free online order </b>
    </div>
</div>


</div>



</div>

</body>
</html>