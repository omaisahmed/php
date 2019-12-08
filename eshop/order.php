<html>
<body>
<?php
session_start();
$servername="localhost";
$uname="root";
$upassword="";
$dbname="examstore";
$orderno='1000';
$connect=new MYSQLi($servername,$uname,$upassword,$dbname);

$count=1;
$i=0;
$total=0;
foreach($_SESSION["pcode"] as $pcode)
{
	$sql="select * from products where pcode='$pcode'";
	$a=$_SESSION["pqty"][$i];
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();
	$pname=$row["pname"];
	$stock=$row["pstock"];
    $price=$row["pprice"];
    $pimg=$row["pimage"];
	$amount=$price*$a;
	$orderdate=date("y-m-d");
	$cd=date("d");
	$cm=date("m");
	$cy=date("y");
	$deliveryday=$cd+3;
	$deliverydate=$cy."-".$cm."-".$deliveryday;
	echo $orderdate;
	$loginid=$_SESSION["loginid"];
$sql1="insert into orders values($orderno,'$orderdate','$pname',$price,$a,'$loginid','$deliverydate')";	
$result=$connect->query($sql1);
$i++;
$count++;
}

echo "Thank you: Your order will be deliverd soon before $deliverydate."; 

?>

</body>
</html>