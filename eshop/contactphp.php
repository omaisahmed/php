<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Massage</title>

    <style>


.re {
	background-color: #0e6655;
    text-decoration: none;
    color:black;
    padding: 10px 10px;
    font-size: 25px;
    font-weight: bolder;
    float: right;
    margin-right: 30px;
    border-radius: 20px;
    transition:1s !important;
}
.re:hover {
	background-color:#16a085;
	border: none;
	transition:1s !important;
    box-shadow: 2px 2px 10px #00000080;
}

</style>

</head>
<body>
    
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];




$servername="localhost";
$uname="root";
$upassword="";
$dbname="examstore";

$connect=new MYSQLi($servername,$uname,$upassword,$dbname);

$sql="insert into contable (name,conemail,subject,massage) values('$a', '$b', '$c','$d')";

$result=$connect->query($sql);

echo"<h2 align=center> Thanks for contact us <br> </h2>";
echo"<h4 align=center> We will solve your problem as soon as possible </h4>";



?>

<a href="index.php" class="re">&#8592;</a>

</body>
</html>