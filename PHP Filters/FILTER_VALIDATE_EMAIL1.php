<?php
$email='decentomais90@gmail.com';
$email=filter_var($email,FILTER_SANITIZE_EMAIL);
if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
{
	echo "$email (Your Email is Valid)";
}
else{
	echo "$email (Your Email is Invalid)";
}
?>