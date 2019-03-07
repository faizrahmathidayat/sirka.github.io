<?php
$from_mail = 'no-reply@serverhost.com';
$to = 'awani.adventure@gmail.com';
 
$subject = 'SUBJECT MESSAGE';
$message = <<<AKAM
BODY message on send.<br>
<span style="color:#f00;font-weight:bold;">You can change body message</span>
AKAM;
 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: Your Name <'.$to.'>' . "\r\n";
$headers .= 'From: NO-REPLY <'.$from_mail.'>' . "\r\n";
 
$sendtomail = mail($to, $subject, $message, $headers);
if( $sendtomail ) echo 'Success';
else echo 'Failed';
?>