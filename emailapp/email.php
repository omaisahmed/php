<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];


require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "decentomais90@gmail.com";
   $mail ->Password = "03152230228";
   $mail ->SetFrom("decentomais90@gmail.com");
   $mail ->Subject = $b;
   $mail ->Body = $c;
   $mail ->AddAddress($a);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }





?>