<?php
include("class/cf.php");
$est=new estate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container well">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Edmin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						
						

						
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">  
			<div class="row">
            
                        <div class="heading">
		<p style="color:#000; font-size:14pt; font-family:Verdana, Geneva, sans-serif;font-style:normal; text-transform:capitalize; text-align:center;">Welcome to Login Portal</p>
						</div> 
                        
                     
                        
				<div class="module module-login span4 offset4">	
                <form class="form-vertical" method="post" action=""> 
						<div class="module-head">
						<h3>Sign In</h3>
						</div>          
					<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
					<input class="span12" type="text" name="aname" required  placeholder="Admin Name">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" name="pass" required placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="btnlogin" class="btn btn btn-med btn-primary pull-right">Login
</button>
									<label class="checkbox">
										<input type="checkbox" checked> Remember me
								</label>
								</div>
							</div>
						</div>
					</form>
				</div>
<?php
if(isset($_POST['btnlogin'])){
$name=$_POST['aname'];
$password=$_POST['pass'];
$est->login($name,$password);
}
?>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container" style="text-align:left;">
			<b class="copyright">&copy; 2019 Real Estate Management   -  </b>  All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
           <script>
       $('.js-tilt').tilt({
            scale:1.1
       })
           </script>
</body>