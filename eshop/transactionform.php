<?php
session_start();
//$amount=$_GET["amount"];
?>
<!DOCTYPE html>
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

</div>  <br> <br>
	
	<div align="center" style="padding: 6px;">
    <form id="myCCForm" action="payment.php" method="post">
            <input id="token" name="token" type="hidden" value="">
            <div>
                <label>
                    <span>Card Number</span>
                </label>
                <input id="ccNo" type="text" size="20" value="" autocomplete="off" required />
            </div> <br> 
		
            <div>
                <label>
                    <span>Expiration Date (MM/YYYY)</span>
                </label>
                <input type="text" size="2" id="expMonth" required />
                <span> / </span>
                <input type="text" size="2" id="expYear" required />
                <input type="hidden" size="2" name="amount" value='<?php echo $_SESSION["total"] ?>' required />
            </div> <br>
            <div>
                <label>
                    <span>CVC</span>
                </label>
                <input id="cvv" size="4" type="text" value="" autocomplete="off" required />
                Amount to be paid Rs.<?php echo $_SESSION["total"] ?>
            </div> <br> 
		
            <input type="submit" class="checkout-btn" value="Submit Payment">
        </form>
		</div>

        <script type="text/javascript" src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <script>
            // Called when token created successfully.
            var successCallback = function(data) {
                var myForm = document.getElementById('myCCForm');

                // Set the token as the value for the token input
                myForm.token.value = data.response.token.token;

                // IMPORTANT: Here we call `submit()` on the form element directly instead of using jQuery to prevent and infinite token request loop.
                myForm.submit();
            };

            // Called when token creation fails.
            var errorCallback = function(data) {
                if (data.errorCode === 200) {
                    tokenRequest();
                } else {
                    alert(data.errorMsg);
                }
            };

            var tokenRequest = function() {
                // Setup token request arguments
                var args = {
                    sellerId: "901404483",
                    publishableKey: "B1958C58-D1B6-4EB8-9CA7-C612E0A35BBA",
                    ccNo: $("#ccNo").val(),
                    cvv: $("#cvv").val(),
                    expMonth: $("#expMonth").val(),
                    expYear: $("#expYear").val()
                };

                // Make the token request
                TCO.requestToken(successCallback, errorCallback, args);
            };

            $(function() {
                // Pull in the public encryption key for our environment
                TCO.loadPubKey('sandbox');

                $("#myCCForm").submit(function(e) {
                    // Call our token request function
                    tokenRequest();

                    // Prevent form from submitting
                    return false;
                });
            });
        </script>
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