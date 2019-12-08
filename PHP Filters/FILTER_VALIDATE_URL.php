<?php
$url='https://www.w3schools.com/php/php_filter.asp';
$url=filter_var($url,FILTER_SANITIZE_URL);
if(!filter_var($url, FILTER_VALIDATE_URL) === false)
{
	echo "$url (Your URL is Valid)";
}
else{
	echo "$url (Your URL is Invalid)";
}
?>