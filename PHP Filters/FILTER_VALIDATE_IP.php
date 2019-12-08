<?php
$ip = "127.0.0.1";
if(!filter_var($ip, FILTER_VALIDATE_IP) === false)
{
	echo "$ip (Your IP Address is Valid)";
}
else{
	echo "$ip (Your IP Address is Invalid)";
}
?>