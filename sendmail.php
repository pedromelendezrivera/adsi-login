<?php
    ini_set('display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@tutorials.com";
    $to = "pmelendez@misena.edu.co";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";

?>