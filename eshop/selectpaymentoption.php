<html>
<body>
<?php
$a=$_POST["p1"];
if ($a=='Cash')
{
header("location:login-php.php");
}
if ($a=='Easypaisa')
{
header("location:transactionform.php");
}
?>

</body>
</html>