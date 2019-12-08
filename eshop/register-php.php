<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title> FHA</title>
	<!-- google font -->
	<link href="./login/gfont.css" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="./login/font.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="./login/iconic_font.min.css">
	<!--bootstrap -->
	<link href="./login/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="./login/extra_pages.css">
	<!-- favicon -->
	
</head>
<!-- END HEAD -->

<body style="background-image: url('imgs/bg-login.png');">
	<form action="login-php.php" method="post" onsubmit="return validation()">
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img src="logo/1.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>
                    
                    <div class="row">
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter username">
								<input class="input100" id="user" type="text" name="t1" placeholder="Username" autocomplete="off">
								<span id="userspan"></span>
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter email">
								<input class="input100" id="email" type="text" name="t2" placeholder="Email" autocomplete="off">
								<span id="emailspan"></span>
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<input class="input100" id="pass" type="password" name="t3" placeholder="Password" autocomplete="off">
								<span id="passspan"></span>
							</div>
						</div>

						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<input class="input100" id="conpass" type="password" name="t4" placeholder="Confrim Password" autocomplete="off">
								<span id="conpassspan"></span>
							</div>
						</div>

						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<input class="input100" id="number" type="text" name="t5" placeholder="Contact Number" autocomplete="off">
								<span id="numberspan"></span>
							</div>
						</div>
						
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Register
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
		<!-- start js include path -->
	<!-- start js include path -->
	<script src="jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="bootstrap.min.js"></script>
	<script src="pages.js"></script>
	<!-- end js include path -->
		</form>



<script type="text/javascript">

function validation(){
	var user = document.getElementById('user').value;
	var email = document.getElementById('email').value;
	var pass = document.getElementById('pass').value;
	var conpass = document.getElementById('conpass').value;
	var number = document.getElementById('number').value;
	// user 
if(user == ""){
	document.getElementById('userspan').innerHTML="please fill user name";
	return false;
}

if((user.lenght <2) ){
	document.getElementById('userspan').innerHTML="User Name must be between 2 ";
	return false;
}


if(!isNaN(user)){
	document.getElementById('userspan').innerHTML="only characters are allowed ";
	return false;
}






// email
if(email == ""){
	document.getElementById('emailspan').innerHTML="please fill user name";
	return false;
}






// password
if(pass == ""){
	document.getElementById('passspan').innerHTML="please fill user name";
	return false;
}

if((pass.lenght <5)){
	document.getElementById('passspan').innerHTML="password must be grater then 5 ";
	return false;
}

if(pass!=conpass){
	document.getElementById('conpassspan').innerHTML="password are not matched ";
	return false;
}




// confrim password
if(conpass == ""){
	document.getElementById('conpassspan').innerHTML="please fill user name";
	return false;
}





// number
if(number == ""){
	document.getElementById('numberspan').innerHTML="please fill user name";
	return false;
}


if(isNaN(number)){
	document.getElementById('numberspan').innerHTML="Only Digits not characters";
	return false;
}






}


</script>
</body>

</html>