<?php
$int=22;
if(!filter_var($int, FILTER_VALIDATE_INT) === false)
{
	echo "$int (Your Integer is Valid)";
}
else{
	echo "$int (Your Integer is Invalid)";
}
?>