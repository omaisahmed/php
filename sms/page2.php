<html>
<body>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$m=$_POST["t3"];
$mobileno=$a.$b;

echo $mobileno;



//$pass=$_POST["pass"];
//$pass = strtolower($pass);
$sender="Omais";
$receiver=$mobileno;
$msg=$m;
$sender = urlencode($sender);
$receiver = urlencode($receiver);
$msg = urlencode($msg);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://bulksms.com.pk/api/sms.php?username=923101095316&password=omais123&sender='.$sender.'&mobile='.$receiver.'&message='.$msg);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec ($ch);

echo $result;
?>


</body>
</html>