
<?php

session_start();
include "config.php"




if(isset($_SESSION['token'])){
    $to_email = "umertheninja44@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "umertheninja44@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
 echo "Email successfully sent to $to_email...";
} 
else {
    
    echo "Email sending failed...";
}
}
?>