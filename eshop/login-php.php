<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title> Login </title>
	<!-- google font -->
	<link href="./login/gfont.css" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="./login/font.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="./login/iconic_font.min.css">
	<!--bootstrap -->
	<link href="./login/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="./login/extra_pages.css">
	  <link href="style.css" rel="stylesheet" type="text/css"/>
	<!-- favicon -->
	
</head>
<!-- END HEAD -->

<body style="background-image: url('imgs/bg-login.png');">
	<form action="login.php" method="post">
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<div class="logo" align="center" style="background-color: lightblue">
               <a href="index.php"> <font size="6px"> <b> Shoe Store </b> </font> <br> 
               <em> The Best Shoes Online </em>
               <blockquote>
                 <p>&nbsp;</p>
               </blockquote>
               </a>
			
            </div>
					<span class="login100-form-title p-b-34 p-t-27"> <br> <br> <br>
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="t1" placeholder="Username">
						
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="t2" placeholder="Password">
						
					</div>
				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"><a href="register-php.php" style="color: black">
							Register</a>
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="bootstrap.min.js"></script>
	<script src="pages.js"></script>
	<!-- end js include path -->
		</form>
</body>

</html>