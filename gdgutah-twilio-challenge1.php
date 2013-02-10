<?php
// This line loads the Twilio PHP library
require('/twilio-php/Services/Twilio.php');
 
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "{{ key }}"; 
$token = "{{ key }}"; 
$client = new Services_Twilio($sid, $token);
 
$message = $client->account->sms_messages->create("{{ from number }}", "[[ to number }}", "Message", array());
echo $message;  
?>
