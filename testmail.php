<?php
 ini_set( 'display_errors', 1 );
 
 error_reporting( E_ALL );
 
 $from = "gelibolumerve@gmail.com";
 
 $to = "merve0959@hotmail.com";
 
 $subject = "staj";
 
 $message = "PHP mail çalışıyor";
 
 $headers = "From:" . $from;
 
 mail($to, $subject, $message, $headers);
 
 echo "Email gönderildi.";
?>