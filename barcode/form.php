<?php
$servername="localhost";
$uname="root";
$password="";
$dbname="examstore";
$connect=new MySQLi($servername,$uname,$password,$dbname);
$sql="select * from products";
$result=$connect->query($sql);
while ($row=$result->fetch_assoc())
{
$a=$row["pcode"];
$barcodeText=$a;
$barcodeType='code128';
$barcodeDisplay='horizontal';
$barcodeSize='20';
$printText='true';
if($barcodeText != '') 
{
echo '<h4>Barcode:</h4>';
echo '<img class="barcode" alt="'.$barcodeText.'" src="barcode.php?text='.$barcodeText.'&codetype='.$barcodeType.'&orientation='.$barcodeDisplay.'&size='.$barcodeSize.'&print='.$printText.'"/>';
} 
else
{
echo '<div class="alert alert-danger">Enter product name or number to generate barcode!</div>';
}
}
?>