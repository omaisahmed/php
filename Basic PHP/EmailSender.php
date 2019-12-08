
<?php

require_once ("PHPMailer/PHPMailerAutoload.php");

//PHPMailer Object
$mail = new PHPMailer;
$mail->isSMTP(true);
$mail->SMTPAuth(true);
$mail->SMTPSecure = 'ssl';
$mail->Host = 'mail.mydomain.com';
$mail->Port = '25';
$mail->isHTML(true);
$mail->Username = 'decentomais90@gmail.com';
$mail->Password = '03152230228';
$mail->SetFrom('no-reply@howcode.org');
$mail->Subject = 'Hello!!!!!!';
$mail->Body = 'Testing Email';
$mail->AddAddress("mani.ahmed90@gmail.com");
$mail->Send();

?>


