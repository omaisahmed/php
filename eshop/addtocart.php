<?php
session_start();
$pcode=$_GET["pcode"];
$i=$_SESSION["index"];
$_SESSION["pcode"][$i]=$pcode;
$_SESSION["pqty"][$i]=1;
$i++;
$_SESSION["index"]=$i;

header("location:index.php");
?>